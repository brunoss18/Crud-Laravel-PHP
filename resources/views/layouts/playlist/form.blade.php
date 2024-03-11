@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary" href="{{ url('playlist') }}">Voltar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        
                            @if( Request::is('*/edit'))
                            <form action="{{ url('playlist/update') }}/{{ $playlist->id }}" method="post">
                            @csrf




                            <div class="form-group">
                                <label for="exampleInputEmail1">Titulo:</label>
                                <input type="text" name="titulo" class="form-control">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Descrição:</label>
                                <input type="text" name="descricao" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Autor:</label>
                                <input type="text" name="autor" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>





                              
                              <button type="submit" class="btn btn-primary">Atualizar</button>
                            </form>

                            @else

                            <form action="{{ url('playlist/add') }}" method="post">
                            @csrf
                              <div class="form-group">
                                <label for="exampleInputEmail1">Titulo:</label>
                                <input type="text" name="titulo" class="form-control">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Descrição:</label>
                                <input type="text" name="descricao" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Autor:</label>
                                <input type="text" name="autor" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </form>
                            @endif
                        


                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
