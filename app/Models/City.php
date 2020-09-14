<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class City extends Model
{
    use HasFactory;
    public $incrementing = false;
    public static function insertData($data){
        $result = DB::table('cities')->where('id' , $data['id'])->get();
        if($result->count() == 0){
            DB::table('cities')->insert($data);
        }
    }
}
