@extends('layouts.app')

@section('content')

<h4>Editar Cliente</h4>

<form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
    @method('PUT')
    @include('clientes._form')
</form>

@endsection