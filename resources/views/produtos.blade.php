@extends('layouts.app')

@section('title', 'Produtos')

@section('content')
    <div class="card">
        <h2>Catálogo de Produtos</h2>
        
        @if(!$nome && !$preco)
            <p style="color: #666; font-style: italic;">
                Nenhum produto foi selecionado. Adicione os parâmetros na URL para visualizar. Exemplo: /app/produtos/BambuLab A1 Mini/2500
            </p>
        @else
       
            <p><strong>Produto selecionado:</strong> {{ $nome }}</p>
            
            <p>
                <strong>Preço:</strong> 
                R$ {{ number_format((float)$preco, 2, ',', '.') }}
            </p>
        @endif
    </div>
@endsection