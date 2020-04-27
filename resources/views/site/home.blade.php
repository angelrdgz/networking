@extends('layouts.site')

@section('content')
<div class="first">
    <div class="container">
        <div class="row d-flex justify-content-around align-items-center">
            <div class="col-sm-6">
                <h1 class="text-white text-center">Networking</h1>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda illum eligendi omnis veniam vel consequuntur dolor corporis, nisi numquam, quis id expedita. Nihil iusto molestias adipisci a autem nemo provident!</p>
            </div>
            <div class="col-sm-6">
                <img src="{{ asset('images/work2.bcda33bf.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
<div class="second">
<div class="container">
        <div class="row">
            <div class="col-sm-6">
            <img class="w-75" src="{{ asset('images/banner_img.378e2312.png') }}" alt="">
            </div>
            <div class="col-sm-6">
                <h1 class="text-center">Servicios</h1>
            </div>
        </div>
    </div>
</div>
@endsection