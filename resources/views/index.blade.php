@extends('layouts.layout')

@section('content')
    <div class="container-fluid text-center search-section">
        <div class="container">
            <div class="big-light-text">Vyhladať v databáze obcí</div>
            <div class="row">
                <input type="text" id="search" class="form-control col-md-5 col-sm-10 col-xs-12 m-auto " name="search" placeholder="Zadajte názov" autocomplete="off">
            </div>
            <div id="hint" class="col-md-5 col-sm-10 col-xs-12 mx-auto h-0"></div>
        </div>
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
                        if (data == ""){
                            $('#hint').html("");
                        }else {
                            var result = "";
                            for (var i = 0; i < data.length; i++) {
                               result += "<div class='row'>" +
                                   "<div class='col-12 text-left py-1 light-bg'><a href=/"+ data[i]['id'] +" class='w-100'>"+data[i]['city_name']+" - "+data[i]['mayor_name']+"</a></div></div>";
                            }
                            $('#hint').html(result);
                        }
                    }
                })
            })
        })
    </script>

@endsection
