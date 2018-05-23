@extends('layouts.master')
@section('content')
<!-- Pantalla principal-->
<div class="row">
    <div class="col-sm-4">
        <img src="{{$movie->poster}}" height="530px"/>
    </div>
    <div class="col-sm-8">
        <h1><strong>{{$movie->title}}</strong></h1>
        <h4>Año: {{$movie->year}}</h4>
        <h4>Director: {{$movie->director}}</h4>
        <br>
        <h4><strong>Resumen:</strong> {{$movie->synopsis}}</h4>
        <br>
        @if($movie->rented)
        <h4><strong>Estado:</strong> Pelicula actualmente alquilada</h4>
        <form action="{{action("CatalogController@putReturn", $movie->id)}}" method="POST" style="display:inline">
            {{ method_field("PUT") }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-warning" style="display: inline">Devolver pelicua</button>
        </form>
        @else
        <h4><strong>Estado:</strong> Pelicula disponible</h4>
        <form action="{{action("CatalogController@putRent", $movie->id)}}" method="POST" style="display:inline">
            {{ method_field("PUT") }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-success" style="display: inline">Alquilar pelicua</button>
        </form>
        @endif
        <!--<a href="/catalog/rent/{{$movie->id}}" class="btn  btn-danger">Devoler pelicula</a>-->
        
        
        
        <a href="/catalog/edit/{{$movie->id}}" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span>Editar pelicula</a>
        <a href="/catalog" class="btn btn-default"> <span class="glyphicon glyphicon-chevron-left"></span> Volvel al listado</a>
        <a href="/catalog/delete/{{$movie->id}}" class="btn btn-danger"> <span class="glyphicon glyphicon-remove"></span>Borrar pelicula</a>
    </div>
</div>
@stop