@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
    <div class="card">
        <h2>Gestão de Clientes</h2>

        @if(empty($clientes))
            <p>Nenhum cliente cadastrado no momento.</p>
        @else
            <p>Lista de clientes cadastrados:</p>
            <ul>

                @foreach($clientes as $cliente)
                    <li>
                        <strong>Nome:</strong> {{ $cliente['nome'] }} | 
                        <strong>Cidade:</strong> {{ $cliente['cidade'] }} |
                        <strong>Status:</strong> {{ $cliente['status'] }}
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection