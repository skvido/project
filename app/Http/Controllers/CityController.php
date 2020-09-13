<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use KubAT\PhpSimple\HtmlDomParser;

class CityController extends Controller
{
    public function index(){
        $cities = City::all();
        return view('index' , ['cities' => $cities]);
    }

    public function show($id){
        $city = City::query()->findOrFail($id);
        return view('show' , ['city' => $city]);
    }
}
