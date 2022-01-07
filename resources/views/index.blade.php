@extends('template')

@section('conteudo')
    <div class="container mt-5">
        <div class="card text-center">
            <div class="card-header">
                <h3>Prova CodeGroup - Luciano André</h3>
                <hr />
                <div class="row">
                    <div class="col-md-8">
                        <form class="" action="{{ route('index') }}">
                            <div>
                                <input class="form-control" text="text" name="pesquisar" placeholder="Pesquisar pelo CPF..." />
                            </div>
                            <div>
                                <input type="submit" value="Pesquisar" class="btn btn-primary" />
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-success" href="{{ route('cadastrar') }}">Cadastrar</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if(count($clients) > 0)
                    <table class="table caption-top table-hover table-responsive table-striped">
                        <caption>Listagem de Clientes</caption>
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($clients as $client)
                                <tr>
                                    <th scope="row">{{ $client->id }}</th>
                                    <td>{{ $client->nome }} {{ $client->sobrenome }}</td>
                                    <td>{{ $client->cpf }}</td>
                                    <td>{{ $client->email }}</td>
                                    <td>{{ $client->telefone }}</td>
                                    <td>{{ $client->rua }}, {{ $client->numero }}. {{ $client->bairro }} - {{ $client->cep }}</td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ route('editar', $client->id) }}">Alterar</a>
                                        <a class="btn btn-danger" data-excluir={{ $client->id }} id=cliente_excluir href="javascript:;">Apagar</a>
                                    </td>
                                </tr>
                             @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Atenção</strong> {{ $mensagem}}.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <a class="btn btn-secondary" href="{{ route('index') }}">Voltar</a>
                @endif
            </div>
            <div class="card-footer text-muted">
              {{ $clients->links() }}
            </div>
        </div>
    </div>
@endsection

@include('modal')