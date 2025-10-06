<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index() {
    $totalFilms = Film::all();
    return response()->json([
        'total' => $totalFilms,
        'status' => 300
    ]);
}


 public function store(Request $request, Film $film) {

    $url = $request->url;
    $titre = $request->titre;
    $description = $request->description;     
    
    if (!empty($url) && !empty($titre)) {
        $film->url = $url;
        $film->titre = $titre;
        $film->description = $description;
        $film->save();

        
        return response()->json([
            'film' => $film,
            'status' => 200,
            'msg' => 'Film ajouté avec succès'
        ]);
    }else{
        return response()->json([
            'msg' => 'Le titre et l\'url sont obligatoires',
            'status' => 400
        ]);
    }
}
}
