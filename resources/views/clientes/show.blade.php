@extends('layouts.main')

@section('title', 'Cliente')

@section('content')

<main>

<h1>Informações do cliente</h1>

<p><strong>Nome: </strong>{{ $cliente->nome }}</p>
<p><strong>Telefone: </strong>{{ $cliente->telefone }}</p>
<p><strong>E-mail: </strong>{{ $cliente->email }}</p>

</main>

@endsection