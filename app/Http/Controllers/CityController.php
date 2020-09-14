<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function index(){
        return view('index');
    }

    public function search(Request $request){
        $cityNames = "";
        if ($request->ajax()){
            $search = $request->search;
            if (strlen($search) > 0) {
                $search = strtolower($search);
                $cityNames = City::query()  ->where('city_name','like',$search.'%')
                                            ->orWhere('mayor_name','like', '%'.$search.'%')
                                            ->take(5)
                                            ->get(['id','city_name','mayor_name']);
            }
            return Response($cityNames);
        }
    }

    public function show($id){
        $city = City::query()->findOrFail($id);
        return view('show' , ['city' => $city]);
    }
}
