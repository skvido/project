@extends('layouts.layout')

@section('content')
    <div class="container-fluid text-center search-section">
        <div>Vyhladať v databáze obcí</div>
        <input type="search" id="search" name="search" placeholder="Zadajte názov">
        <div id="hint"></div>
    </div>

    <script>
        $(document).ready(function(){
            $('#search').on('keyup', function(){
                $searchValue = $(this).val();
                $.ajax({
                    type : 'get',
                    url : '{{URL::to('search')}}',
                    data : {'search' : $searchValue},
                    success : function (data) {
                        console.log(data);
                    }
                })
            })
        })



    </script>

@endsection
