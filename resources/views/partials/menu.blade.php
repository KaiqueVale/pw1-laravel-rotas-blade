<nav>
    <a href="{{ route('site.index') }}">Home</a>
    <a href="{{ route('site.sobrenos') }}">Sobre</a>
    <a href="{{ route('site.contato') }}">Contato</a>
    <a href="{{ route('site.login') }}">Login</a>
    <a href="{{ route('app.clientes') }}">Clientes</a>

    <a href="{{ route('app.fornecedores', ['nome' => 'Geral', 'status' => 'ativo', 'categoria' => 'nacional']) }}">Fornecedores</a>
    
    <a href="{{ route('app.produtos') }}">Produtos</a>
</nav>