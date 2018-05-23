<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class apiCatalogController extends Controller
{
    //
    public function index(){
        return response()->json( Movie::all() );
    }

    public function store(Request $request){
        //dd($request);
    	$movie = new Movie();
    	$movie->title = $request->title;
    	$movie->year = $request->year;
        $movie->director = $request->director;
        $movie->poster = $request->poster;
        $movie->synopsis = $request->synopsis;
        $movie->save();
        return response()->json($movie);
    }

    public function update(Request $request, $id){
    	$movie = Movie::findOrFail($id);
    	$movie->year = $request->year;
        $movie->director = $request->director;
        $movie->poster = $request->poster;
        $movie->synopsis = $request->synopsis;
        $movie->save();
        return response()->json($movie);
    }

    public function destroy($id){
    	Movie::destroy($id);
    	return response()->json("DELETE OK");
    }

    public function show($id){
        $movie = Movie::findOrFail($id);
        return response()->json($movie);
    }
}
