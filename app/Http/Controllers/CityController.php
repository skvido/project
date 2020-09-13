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

    public function search(Request $request){
        $cityNames = "";
        if ($request->ajax()){
            $search = $request->search;
            if ($search !== "") {
                $search = strtolower($search);
                $cityNames = City::query()->where('city_name','like',$search.'%')->take(5)->get(['city_name']);
            }
            return Response($cityNames);
        }
    }

    public function show($id){
        $city = City::query()->findOrFail($id);
        return view('show' , ['city' => $city]);
    }
}
