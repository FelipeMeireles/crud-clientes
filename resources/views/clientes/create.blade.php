@extends('layouts.app')

@section('content')

<h4>Novo Cliente</h4>

<form action="{{ route('clientes.store') }}" method="POST">
    @include('clientes._form')
</form>

@endsection