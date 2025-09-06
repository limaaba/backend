<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    // public function index() {
    //     return 'Film ';
    // }

    public function index() {
    $totalFilms = Film::all();
    return response()->json([
        'total' => $totalFilms,
        'status' => 200
    ]);
}
}
