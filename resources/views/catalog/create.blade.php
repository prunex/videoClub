@extends('layouts.master')
@section('content')
<div class="row" style="margin-top:20px">

    <div class="col-md-offset-3 col-md-6">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title text-center">
                    <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                    Añadir película
                </h3>
            </div>

            <div class="panel-body" style="padding:30px">
                <form method="post" action="/catalog/create">
                     @csrf 

                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="year">Año</label>
                        <input type="text" name="year" id="year" class="form-control">
                        <!--{{-- TODO: Completa el input para el año --}}-->
                    </div>

                    <div class="form-group">
                        <label for="director">Director</label>
                        <input type="text" name="director" id="director" class="form-control">
                        <!--                    {{-- TODO: Completa el input para el director --}}-->
                    </div>

                    <div class="form-group">
                        <label for="poster">Poster</label>
                        <input type="text" name="poster" id="poster" class="form-control">
                        <!--                    {{-- TODO: Completa el input para el poster --}}-->
                    </div>

                    <div class="form-group">
                        <label for="synopsis">Resumen</label>
                        <textarea name="synopsis" id="synopsis" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-primary" value="Añadir película" style="padding:8px 100px;margin-top:25px;">
                    </div>


                </form>

            </div>
        </div>
    </div>
</div>
@stop
