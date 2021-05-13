<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;

class SongController extends Controller
{
    public function index(){

        $songs = Song::all();

        dd($songs);
        return view('welcome');
    }
}
