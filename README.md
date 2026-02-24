# Atividade Laravel - Rotas e Blade

Repositório destinado à entrega da atividade de Programação Web I, desenvolvida no framework Laravel utilizando a arquitetura MVC

##  Identificação do Aluno
**Nome:** Kaique do Vale Soares
**Curso:** Análise e Desenvolvimento de Sistemas (ADS)
**Instituição:** IFCE Campus Boa Viagem 
**Disciplina:** Programação Web I

##  Objetivo da Atividade
Essa atividade tem como objetivo aplicar na prática os seguintes conceitos:
Rotas nomeadas 
Agrupamento de rotas
Controllers
Passagem de parâmetros via URL 
Blade Template Engine 
Reutilização de layout com `@extends` e `@include` 
Estrutura MVC (Model-View-Controller) 

##  Estrutura de Rotas
O sistema foi construído com as seguintes rotas

**Rotas Principais:** 
 `/` (Página Principal) 
`/sobrenos`
 `/contato` 
 `/login` 

**Grupo de Rotas (Prefixo `/app`):** 
`/app/clientes` (Listagem com `@foreach` e validações)
`/app/fornecedores/{nome}/{status}/{categoria}` (Passagem de parâmetros via URL) 
`/app/produtos/{nome?}/{preco?}` (Desafio com parâmetros opcionais)

---

##  Como rodar o projeto localmente

Como as pastas `vendor/`, `node_modules/` e o arquivo `.env` não são enviados para o GitHub, siga os passos abaixo para rodar o projeto na sua máquina após clonar o repositório:

### 1. Pré-requisitos
Certifique-se de ter instalado em sua máquina:
* PHP e Composer
* XAMPP (com o módulo Apache iniciado)

### 2. Passo a Passo

1. **Clone o repositório:**
   ```bash
   git clone https://github.com/KaiqueVale/pw1-laravel-rotas-blade.git

2. **Acesse a pasta do Projeto:**

    ```bash
    cd pw1-laravel-rotas-blade

3. **Instale as dependências do Laravel:**

    ```bash
    composer install

4. **Configure o ambiente:**

    ```bash
    cp .env.example .env
    
    
5. **Gere a chave da aplicação:**

    ```bash
    php artisan key:generate

6. **Inicie o servidor local:**

    ```bash
    php artisan serve

7. **Acesse no navegador:**

Abra http://localhost:8000 para visualizar o sistema.
