@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a class="btn btn-primary" href="{{ url('playlist/new') }}">Novo Playlist</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h1>Playlists</h1>


                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Título da Playlist</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Autor</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Deletar</th>
                                    <th scope="col">Exportar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $playlist as $u )

                                <tr>
                                    <th scope="row">{{ $u->id }}</th>
                                    <th>{{ $u->titulo }}</th>
                                    <td>{{ $u->descricao }}</td>
                                    <td>{{ $u->autor }}</td>
                                    <td>
                                        <a href="playlist/{{ $u->id }}/edit" class="btn btn-info">Editar</button>
                                    </td>
                                    <td>
                                        <form action="playlist/delete/{{ $u->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">Deletar</button>
                                        </form>

                                    </td>
                                    <td>
                                        <form action="playlist/json/{{ $u->id }}" method="get">
                                            @csrf
                                            <button type="submit" class="btn btn-success">JSON</button>
                                        </form>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <style>
                        /* Adiciona uma barra de rolagem horizontal em telas menores */
                        .table-responsive {
                            overflow-x: auto;
                        }

                        /* Faz com que cada célula da tabela tenha 100% de largura em telas menores */
                        .table-responsive table {
                            width: 100%;
                        }

                        /* Remove a largura fixa das células de cabeçalho */
                        .table-responsive thead th {
                            width: auto;
                        }

                        /* Força a quebra de palavras longas para evitar que estourem o layout */
                        .table-responsive td,
                        .table-responsive th {
                            word-wrap: break-word;
                            overflow-wrap: break-word;
                        }

                        /* Adiciona um espaçamento entre as células da tabela em telas menores */
                        .table-responsive td,
                        .table-responsive th {
                            padding: 8px;
                        }

                    </style>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
