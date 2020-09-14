@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="text-center h1"> Detail obce </div>
        <div class="row shadow my-5 rounded border-top ">
            <div class="col-md-6 col-sm-12 bg-light">
                <div class="m-5">
                    <table class="table table-sm table-borderless m-4">
                        <tr>
                            <th class="w-50">Meno starostu:</th>
                            <td>{{ $city->mayor_name }}</td>
                        </tr>
                        <tr>
                            <th>Adresa obecného úradu:</th>
                            <td>{{ $city->address }}</td>
                        </tr>
                        <tr>
                            <th>Telefón:</th>
                            <td>{{ $city->phone_number }}</td>
                        </tr>
                        <tr>
                            <th>Fax:</th>
                            <td>{{ $city->fax }}</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>{{ $city->email }}</td>
                        </tr>
                        <tr>
                            <th>Web:</th>
                            <td>{{ $city->web_address }}</td>
                        </tr>
                        <tr>
                            <th>Zemepisné súradnice:</th>
                            <td>{{ $city->latitude }}, {{$city->longitude }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 h1 container img-area">
                <div class="text-center center ">
                    <img src='{{ $city->image_url }}' alt='coat of arms'>
                    <p>{{ $city->city_name }}</p>
                </div>
            </div>

        </div>
    </div>

@endsection
