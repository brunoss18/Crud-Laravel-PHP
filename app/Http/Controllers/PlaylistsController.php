<?php

namespace App\Http\Controllers;
use App\Models\Playlist;
use Redirect;
use Illuminate\Http\Request;

class PlaylistsController extends Controller
{
    public function index(){
        $playlist = Playlist::get();
        return view('layouts\playlist\list', ['playlist'=> $playlist]);
    }

    public function new(){
        return view('layouts\playlist\form');
    }

    public function add( Request $request){
      
        $playlist = new Playlist;
        $playlist = $playlist -> create( $request->all() );
        return Redirect::to('/playlist');
    }

    public function edit( $id ){
        $playlist = Playlist::findOrFail( $id );
        return view('layouts\playlist\form', ['playlist' => $playlist]);
    }

    public function update($id, Request $request)
    {
        $playlist = Playlist::findOrFail($id);
        $playlist->update($request->all());
        return Redirect::to('/playlist');
    }
 

    public function delete( $id ){
        $playlist = Playlist::findOrFail( $id );
        $playlist->delete();
        return Redirect::to('/playlist');
    }

    public function exportJson($id)
    {
        $playlist = Playlist::find($id);
        return response()->json($playlist);
    }
    
} 