<?php

namespace App\Http\Controllers\admin;

use App\Hotline;
use App\Http\Controllers\Controller;
use App\Province;
use Illuminate\Http\Request;
use KubAT\PhpSimple\HtmlDomParser;

class HomeController extends Controller
{
    public function index()
    {
        $hotlines = Hotline::where('province', 16)->get();
        $provinces = Province::orderBy('province')->get();
        return view('admin/home/index', [
            'hotlines' => $hotlines,
            'provinces' => $provinces
        ]);
    }

    public function create()
    {
        $provinces = Province::orderBy('province')->get();
        return view('admin/home/create', [
            'provinces' => $provinces
        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            'hotline' => 'required',
            'name' => 'required',
        ];
        $messages = [
            'hotline.required' => 'Không được để trống',
            'name.required' => 'Không được để trống',
        ];
        $request->validate($rules, $messages);

        $hotline_model = new Hotline();
        $hotline_model->hotline = $request->get('hotline');
        $hotline_model->name = $request->get('name');
        $hotline_model->address = $request->get('address');
        $hotline_model->province = $request->get('province');
        $hotline_model->save();

        return redirect('admin');
    }

    public function edit(Request $request, $id)
    {
        $hotline_model = new Hotline();
        $hotlines = $hotline_model->getById($id);
        $provinces = Province::orderBy('province')->get();
        return view('admin/home/edit', [
            'hotlines' => $hotlines,
            'provinces' => $provinces
        ]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'hotline' => 'required',
            'name' => 'required',
        ];
        $messages = [
            'hotline.required' => 'Không được để trống',
            'name.required' => 'Không được để trống',
        ];
        $request->validate($rules, $messages);

        $hotline_model = new Hotline();
        $hotline = $hotline_model->getById($id);
        $hotline->hotline = $request->get('hotline');
        $hotline->name = $request->get('name');
        $hotline->address = $request->get('address');
        $hotline->latitude = $request->get('latitude');
        $hotline->longitude = $request->get('longitude');
        $hotline->province = $request->get('province');
        $hotline->save();

        return redirect('admin');
    }

    public function getProvince(Request $request)
    {
        $province = $request->get('province_id');
        $hotlines = Hotline::where('province', $province)->get();
        return view('admin/home/hotline', [
            'hotlines' => $hotlines
        ]);
    }

    public function hanoi()
    {
        $html = HtmlDomParser::file_get_html('https://www.vntrip.vn/cam-nang/dien-thoai-taxi-ha-noi-mai-linh-noi-bai-group-thanh-nga-25771')
            ->find('.article-content ul li h4 span span');
        foreach ($html as $value) {
//            $hotline_model = new Hotline();
            $explode = explode(':', $value->innertext());
            echo "<pre>";
            print_r($explode);
            echo "</pre>";
//            $hotline_model->name = $explode[0];
//            $hotline_model->hotline = $explode[1];
//            $hotline_model->province = 'Hà Nội';
//            $hotline_model->save();
        }
    }

    public function thainguyen()
    {
        $html = HtmlDomParser::file_get_html('http://taxiadvertisingvn.com/danh-ba-tong-dai-dien-thoai-cac-hang-taxi-tai-thai-nguyen-3536.html?fbclid=IwAR2AOd94TuimV-JJInDrMWGQfIDDG_zxXSYRrcuEYNvn6atH6cOvlRrQKO0')
            ->find('.cms_table_td');
        $i = 0;
        $array_hotline = [];
        foreach ($html as $value) {
            $array_hotline[$i] = $value->innertext();
            $i++;
            // $hotline_model = new Hotline();
//            $explode = explode(':',$value->innertext());
            // $hotline_model->name = $explode[0];
            // $hotline_model->hotline = $explode[1];
            // $hotline_model->province = 'Thái Nguyên';
            // $hotline_model->save();
        }
//        echo "<pre>";
//        print_r($array_hotline);
//        echo "</pre>";
        $n = 4;
        while ($n <= $i) {
            if($n %2 == 0){
                 $hotline_model = new Hotline();
                 $hotline_model->name = $array_hotline[$n - 2];
                 $hotline_model->hotline = $array_hotline[$n - 1];
                 $hotline_model->province = 12;
                 $hotline_model->save();
            }
            $n++;
        }
    }
}
