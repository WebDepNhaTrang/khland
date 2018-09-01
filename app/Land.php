<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Land extends Model
{
    public static function search($key){
        $results = Land::select('*')->where('name', 'like', '%'.$key.'%')->get();
            return $results;
    }
}
