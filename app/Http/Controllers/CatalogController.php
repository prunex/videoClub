<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Styde\Html\Facades\Alert;

class CatalogController extends Controller {

    public function getIndex() {
        $movies = Movie::all();
        //return view("catalog.index", array('arrayPeliculas'=>$this->arrayPeliculas));
        return view("catalog.index", compact("movies"));
    }

    public function getShow($id) {
        $movie = Movie::findOrFail($id);
        //return view("catalog.show", compact("id"));
        //return view("catalog.show", array('elemento'=>$this->arrayPeliculas[$id]));
        return view("catalog.show", compact("movie"));
    }

    public function getCreate() {
        return view("catalog.create");
    }

    public function getEdit($id) {
        $pelicula = Movie::findOrFail($id);
        //return view("catalog.edit", compact("id"));
        return view("catalog.edit", compact("pelicula"));
    }

    public function postCreate(Request $request) {
        $movie = new Movie();
        $movie->title = $request->title;
        $movie->year = $request->year;
        $movie->director = $request->director;
        $movie->poster = $request->poster;
        $movie->synopsis = $request->synopsis;
        $movie->save();
        Alert::success("La pelicula se ha guardado correctamente.");
        return redirect("/catalog");
    }

    public function putEdit(Request $request, $id) {
        $movie = Movie::findOrFail($id);
        $movie->title = $request->title;
        $movie->year = $request->year;
        $movie->director = $request->director;
        $movie->poster = $request->poster;
        $movie->synopsis = $request->synopsis;
        $movie->save();
        Alert::success("La pelicula se ha modificado correctamente.");
        return redirect("/catalog/show/$id");
    }

    public function putRent($id) {
        $movie = Movie::findOrFail($id);
        $movie->rented = 1;
        $movie->save();
        return redirect("/catalog/show/$id");
    }

    public function putReturn($id) {
        $movie = Movie::findOrFail($id);
        $movie->rented = 0;
        $movie->save();
        //return redirect("/catalog/show/$id");
        return response()->json(["error"=>false, "msg"=>"La pelicula se ha marcado como alquilada"]);
    }

    public function deleteMovie($id) {
        //Movie::delete($id);
        Movie::destroy($id);
        return redirect("/catalog");
    }

}
