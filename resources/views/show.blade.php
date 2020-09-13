@extends('layouts.layout')

@section('content')
<div class="text-center h1"> Detail obce </div>
<div class="row shadow p-3 mb-5 bg-white rounded border-top">
    <div class="col-md-6 col-sm-12">
        <div class="d-flex justify-content-center">
            <table class="table table-sm table-borderless m-4">
                <tr>
                    <th>Meno starostu:</th>
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
    <div class="col-md-6 col-sm-12">
        <div class="text-center align-middle h1">
            <img src='{{ $city->image_url }}' alt='coat of arms'>
            <p>{{ $city->city_name }}</p>
        </div>
    </div>

</div>


@endsection
