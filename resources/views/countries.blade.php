@extends('layouts.master')
@section('content')
<a href="/" class="btn btn-primary my-2">Volver</a>
<div class="row">
    @foreach ($countries as $country)
    <div class="col-md-4">
        <div class="card my-2">
            <img class="card-img-top" src="{{$country->Flag}}" alt="Card image" style="width:100%; height:200px;">
            <div class="card-body">
                <h4 class="card-title">{{$country->Name}}</h4>
                <p class="card-text">{{$country->Description}}</p>
                <a href="/pais/{{$country->Alpha3Code}}" class="btn btn-primary">Ver Detalle</a>
                <a href="#" class="btn btn-secundary float-right"
                    onclick="like('{{$country->Alpha3Code}}'); return false;">Like</a>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endsection
