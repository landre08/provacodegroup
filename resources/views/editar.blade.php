@extends('template')

@section('conteudo')
    <div class="container mt-5">
        <div class="card text-center">
            <div class="card-header">
                <h3>Edição de Cliente</h3>
            </div>
            <div class="card-body">
                <form class="row g-3" method="POST" action="{{ route('atualizar') }}">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                      <label for="nome" class="form-label">Nome</label>
                      <input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" name="nome" value="{{ ($client->nome ) ? $client->nome : old('nome') }}" >
                      @if($errors->has('nome'))
                        <div class="invalid-feedback">
                            {{ $errors->first('nome') }}
                        </div>
                      @endif
                    </div>
                    <div class="col-md-6">
                      <label for="sobrenome" class="form-label">Sobrenome</label>
                      <input type="text" class="form-control {{ $errors->has('sobrenome') ? 'is-invalid' : '' }}" name="sobrenome" value="{{ ($client->sobrenome ) ? $client->sobrenome : old('sobrenome') }}">
                      @if($errors->has('sobrenome'))
                        <div class="invalid-feedback">
                            {{ $errors->first('sobrenome') }}
                        </div>
                      @endif
                    </div>
                    <div class="col-md-6">
                      <label for="email" class="form-label">E-mail</label>
                      <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ ($client->email ) ? $client->email : old('email') }}">
                      @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                      @endif
                    </div>
                    <div class="col-md-4">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" class="form-control {{ $errors->has('cpf') ? 'is-invalid' : '' }}" name="cpf" value="{{ ($client->cpf ) ? $client->cpf : old('cpf') }}">
                        @if($errors->has('cpf'))
                        <div class="invalid-feedback">
                            {{ $errors->first('cpf') }}
                        </div>
                        @endif
                    </div>
                    <div class="col-md-2">
                      <label for="telefone" class="form-label">Telefone</label>
                      <input type="text" class="form-control {{ $errors->has('telefone') ? 'is-invalid' : '' }}" name="telefone" value="{{ ($client->telefone ) ? $client->telefone : old('telefone') }}">
                      @if($errors->has('telefone'))
                      <div class="invalid-feedback">
                          {{ $errors->first('telefone') }}
                      </div>
                      @endif
                    </div>
                    <div class="col-md-3">
                        <label for="rua" class="form-label">Rua</label>
                        <input type="text" class="form-control {{ $errors->has('rua') ? 'is-invalid' : '' }}" name="rua" value="{{ ($client->rua ) ? $client->rua : old('rua') }}">
                        @if($errors->has('rua'))
                        <div class="invalid-feedback">
                            {{ $errors->first('rua') }}
                        </div>
                        @endif
                    </div>
                    <div class="col-md-3">
                        <label for="numero" class="form-label">Número</label>
                        <input type="text" class="form-control {{ $errors->has('numero') ? 'is-invalid' : '' }}" name="numero" value="{{ ($client->numero ) ? $client->numero : old('numero') }}">
                        @if($errors->has('numero'))
                        <div class="invalid-feedback">
                            {{ $errors->first('numero') }}
                        </div>
                        @endif
                    </div>
                    <div class="col-md-3">
                        <label for="bairro" class="form-label">Bairro</label>
                        <input type="text" class="form-control {{ $errors->has('bairro') ? 'is-invalid' : '' }}" name="bairro" value="{{ ($client->bairro ) ? $client->bairro : old('bairro') }}">
                        @if($errors->has('bairro'))
                        <div class="invalid-feedback">
                            {{ $errors->first('bairro') }}
                        </div>
                        @endif
                    </div>
                    <div class="col-md-3">
                        <label for="cep" class="form-label">CEP</label>
                        <input type="text" class="form-control {{ $errors->has('cep') ? 'is-invalid' : '' }}" name="cep"  value="{{ ($client->cep ) ? $client->cep : old('cep') }}">
                        @if($errors->has('cep'))
                        <div class="invalid-feedback">
                            {{ $errors->first('cep') }}
                        </div>
                        @endif
                    </div>
                    <div class="col-12">
                        <input type="hidden" name="id" value="{{ $client->id }}">
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </div>
                  </form>
            </div>
            <div class="card-footer text-muted">

            </div>
        </div>
    </div>
@endsection