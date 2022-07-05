@extends('layouts.main')

@section('title', 'Editar cliente')

@section('content')

<main>

<h1>Editar dodos do cliente</h1>

<form action="/clientes/update/{{ $cliente->id }}" method="POST">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="inputName">Nome completo</label>
    <input type="text" class="form-control" id="inputName" name="nome" aria-describedby="name" placeholder="Seu nome" value="{{ $cliente->nome }}">
  </div>
  <div class="form-group">
    <label for="inputFone">Telefone</label>
    <input type="text" class="form-control" id="inputFone" name="telefone" placeholder="(00) 00000-0000" value="{{ $cliente->telefone }}">
  </div>
  <div class="form-group">
    <label for="inputEmail">Endereço de email</label>
    <input type="email" class="form-control" id="inputEmail" name="email" aria-describedby="email" placeholder="Seu email" value="{{ $cliente->email }}">
  </div>
  <button type="submit" class="btn btn-primary">Alterar</button>
</form>

</main>

@endsection