<?php

namespace App\Http\Controllers;
use App\Models\Conteudo;
use Redirect;
use Illuminate\Http\Request;

class ConteudosController extends Controller
{
    public function index(){
        $conteudo = conteudo::get();
        return view('layouts\conteudo\list', ['conteudo'=> $conteudo]);
    }

    public function new(){
        return view('layouts\conteudo\form');
    }

    public function add( Request $request){
      
        $conteudo = new Conteudo;
        $conteudo = $conteudo -> create( $request->all() );
        return Redirect::to('/conteudo');
    }

    public function edit( $id ){
        $conteudo = Conteudo::findOrFail( $id );
        return view('layouts\conteudo\form', ['conteudo' => $conteudo]);
    }

    public function update($id, Request $request)
    {
        $conteudo = Conteudo::findOrFail($id);
        $conteudo->update($request->all());
        return Redirect::to('/conteudo');
    }
 

    public function delete( $id ){
        $conteudo = Conteudo::findOrFail( $id );
        $conteudo->delete();
        return Redirect::to('/conteudo');
    }

    public function exportJson($id)
    {
        $conteudo = Conteudo::find($id);
        return response()->json($conteudo);
    }
    
} 