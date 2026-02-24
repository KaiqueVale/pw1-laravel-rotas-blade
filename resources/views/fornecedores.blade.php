@extends('layouts.app')

@section('title', 'Fornecedores')

@section('content')
    <div class="card">
        <h2>Detalhes do Fornecedor</h2>
        
        <p>informações recebidas pela URL:</p>

        <ul>
            <li><strong>Nome:</strong> {{ $dadosFornecedor['nome'] }}</li>
            <li><strong>Categoria:</strong> {{ $dadosFornecedor['categoria'] }}</li>
            
            <li>
                <strong>Status:</strong> 
                @if($dadosFornecedor['status'] == 'ativo')
                    <span style="color: green; font-weight: bold;">Ativo</span>
                @elseif($dadosFornecedor['status'] == 'inativo')
                    <span style="color: red; font-weight: bold;">Inativo</span>
                @else
                    <span>{{ $dadosFornecedor['status'] }}</span>
                @endif
            </li>
        </ul>
    </div>
@endsection