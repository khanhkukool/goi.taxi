<?php

namespace App\Http\Controllers;

use App\Hotline;
use App\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $provinces = Province::orderBy('province')->get();
        $hotlines = Hotline::where('province', 16)->get();
        return view('home/index', [
            'provinces' => $provinces,
            'hotlines' => $hotlines
        ]);
    }

    public function getProvince(Request $request)
    {
        $province = $request->get('province_id');
        $hotlines = [];
        if ($province == 'locate') {
            return view('home/locate',[
                'hotlines' => $hotlines
            ]);
        } else {
            $hotlines = Hotline::where('province', $province)->get();
            $province_id = Province::where('id', $province)->first();
            return view('home/hotline', [
                'hotlines' => $hotlines,
                'province_id' => $province_id
            ]);
        }
    }

    public function postLocate(Request $request)
    {
        $latitude = $request->post('latitude');
        $longitude = $request->post('longitude');
        $url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' . $latitude . ',' . $longitude . '&key=AIzaSyDLPSKQ4QV4xGiQjnZDUecx-UEr3D0QePY';
        $json = @file_get_contents($url);
        $data = json_decode($json);
        $status = $data->status;
        if ($status == "OK") {
            $location = $data->results[0]->formatted_address;
        } else {
            $location = '';
        }

        $provinces = Province::all();
        foreach ($provinces as $province){
            if(strlen(strstr($location, $province->province)) > 0){
                $province_location = $province->id;
                break;
            }
        }

        $hotlines = Hotline::where('province',$province_location)->get();
        return view('home/locate',[
            'hotlines' => $hotlines,
            'latitude' => $latitude,
            'longitude' => $longitude
        ]);
    }
}
