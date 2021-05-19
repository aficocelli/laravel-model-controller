<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Song;
class SongController extends Controller
{
    public function index(){

        $songs = Song::all();

        return response() -> json($songs);

    }
}
