<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotline extends Model
{
    protected $table = "hotline";

    public function getById($id) {
        $hotline = Hotline::find($id);
        return $hotline;
    }
}
