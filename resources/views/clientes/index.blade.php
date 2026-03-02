@extends('layouts.app')

@section('content')

<a href="{{ route('clientes.create') }}" class="btn btn-primary mb-3">
    Novo Cliente
</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nome</th>
            <th>CEP</th>
            <th>Cidade</th>
            <th>UF</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td>{{ $cliente->nome }}</td>
            <td>{{ $cliente->cep }}</td>
            <td>{{ $cliente->cidade }}</td>
            <td>{{ $cliente->uf }}</td>
            <td>
                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning btn-sm">Editar</a>

                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection