<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::all();

        return view('songs.index', [
            'songs' => $songs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // validation
        $year = date('Y') + 1;
        $rules = [
            'title' => 'required|string|max:100',
            'album' => 'required|string|max:100',
            'author' => 'required|string|max:50',
            'genre' => 'required|string|max:50',
            

        ];
        $request -> validate($rules);

        Song::create($request->all());
        

        return redirect() -> route('songs.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
    
        return view('songs.show', [
            'song'=>$song
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        return view('songs.edit', [
            'song' => $song
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        // validation
        $year = date('Y') + 1;
        $rules = [
            'title' => 'required|string|max:100',
            'album' => 'required|string|max:100',
            'author' => 'required|string|max:50',
            'genre' => 'required|string|max:50',
            'cover' => 'required|string|max:50'

        ];
        $request->validate($rules);

        $song -> update($request -> all());

        return redirect()-> route('songs.show', ['song' => $song]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
