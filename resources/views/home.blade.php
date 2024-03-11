@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><p>SectoTech</p></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 style="text-align:Center;">Seja bem vindo(a) a SectoTeca!</h1>
                   <div style="display: flex; align-items:center; justify-content: space-evenly;">
                        <a class="btn btn-primary"  href="{{url('playlist')}}"> Playlists</a>
                        <a class="btn btn-primary"  href="{{url('conteudo')}}"> Conteúdos</a>
                   </div>
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
