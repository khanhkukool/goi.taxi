<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = "province";

    public function getById($id) {
        $province = Province::find($id);
        return $province;
    }
}
