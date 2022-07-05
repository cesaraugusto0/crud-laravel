@extends('layouts.main')

@section('title', 'Home')

@section('content')

<main>

<h1>Cadastro de cliente</h1>

<form>
  <div class="form-group">
    <label for="inputName">Nome completo</label>
    <input type="text" class="form-control" id="inputName" aria-describedby="name" placeholder="Seu nome">
  </div>
  <div class="form-group">
    <label for="inputFone">Telefone</label>
    <input type="text" class="form-control" id="inputFone" placeholder="(00) 00000-0000">
  </div>
  <div class="form-group">
    <label for="inputEmail">Endereço de email</label>
    <input type="email" class="form-control" id="inputEmail" aria-describedby="email" placeholder="Seu email">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

</main>

@endsection