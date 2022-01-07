@extends('template')

@section('conteudo')
    <div class="container mt-5">
        <div class="card text-center">
            <div class="card-header">
                <h3>Cadastro de Cliente</h3>
            </div>
            <div class="card-body">
                <form class="row g-3" method="POST" action="{{ route('salvar') }}">
                    @csrf
                    <div class="col-md-6">
                      <label for="nome" class="form-label">Nome</label>
                      <input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" name="nome" value="{{ old('nome') }}" >
                      @if($errors->has('nome'))
                        <div class="invalid-feedback">
                            {{ $errors->first('nome') }}
                        </div>
                      @endif
                    </div>
                    <div class="col-md-6">
                      <label for="sobrenome" class="form-label">Sobrenome</label>
                      <input type="text" class="form-control {{ $errors->has('sobrenome') ? 'is-invalid' : '' }}" name="sobrenome" value="{{ old('sobrenome') }}">
                      @if($errors->has('sobrenome'))
                        <div class="invalid-feedback">
                            {{ $errors->first('sobrenome') }}
                        </div>
                      @endif
                    </div>
                    <div class="col-md-6">
                      <label for="email" class="form-label">E-mail</label>
                      <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email') }}">
                      @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                      @endif
                    </div>
                    <div class="col-md-4">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" class="form-control {{ $errors->has('cpf') ? 'is-invalid' : '' }}" name="cpf" value="{{ old('cpf') }}">
                        @if($errors->has('cpf'))
                        <div class="invalid-feedback">
                            {{ $errors->first('cpf') }}
                        </div>
                        @endif
                    </div>
                    <div class="col-md-2">
                      <label for="telefone" class="form-label">Telefone</label>
                      <input type="text" class="form-control {{ $errors->has('telefone') ? 'is-invalid' : '' }}" name="telefone" value="{{ old('telefone') }}">
                      @if($errors->has('telefone'))
                      <div class="invalid-feedback">
                          {{ $errors->first('telefone') }}
                      </div>
                      @endif
                    </div>
                    <div class="col-md-3">
                        <label for="rua" class="form-label">Rua</label>
                        <input type="text" class="form-control {{ $errors->has('rua') ? 'is-invalid' : '' }}" name="rua" value="{{ old('rua') }}">
                        @if($errors->has('rua'))
                        <div class="invalid-feedback">
                            {{ $errors->first('rua') }}
                        </div>
                        @endif
                    </div>
                    <div class="col-md-3">
                        <label for="numero" class="form-label">Número</label>
                        <input type="text" class="form-control {{ $errors->has('numero') ? 'is-invalid' : '' }}" name="numero" value="{{ old('numero') }}">
                        @if($errors->has('numero'))
                        <div class="invalid-feedback">
                            {{ $errors->first('numero') }}
                        </div>
                        @endif
                    </div>
                    <div class="col-md-3">
                        <label for="bairro" class="form-label">Bairro</label>
                        <input type="text" class="form-control {{ $errors->has('bairro') ? 'is-invalid' : '' }}" name="bairro" value="{{ old('bairro') }}">
                        @if($errors->has('bairro'))
                        <div class="invalid-feedback">
                            {{ $errors->first('bairro') }}
                        </div>
                        @endif
                    </div>
                    <div class="col-md-3">
                        <label for="cep" class="form-label">CEP</label>
                        <input type="text" class="form-control {{ $errors->has('cep') ? 'is-invalid' : '' }}" name="cep" value="{{ old('cep') }}">
                        @if($errors->has('cep'))
                        <div class="invalid-feedback">
                            {{ $errors->first('cep') }}
                        </div>
                        @endif
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Cadastrar</button>
                      <button type="reset" class="btn btn-secondary">Limpar</button>
                    </div>
                  </form>
            </div>
            <div class="card-footer text-muted">

            </div>
        </div>
    </div>
@endsection