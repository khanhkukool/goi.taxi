<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function index(){
        $provinces = Province::all();
        return view('admin/province/index',[
            'provinces' => $provinces
        ]);
    }

    public function create(){
        return view('admin/province/create');
    }

    public function store(Request $request){
        $rules = [
            'province' => 'required'
        ];
///
        $messages = [
            'province.required' => 'Không được để trống'
        ];
        $request->validate($rules, $messages);

        $province_model = new Province();
        $province_model->province = $request->get('province');
        $province_model->save();
        session()->flash('success');

        return redirect('admin/province');
    }

    public function edit(Request $request, $id){

        return view('admin/province/update');
    }

    public function update(Request $request, $id){

    }
}
