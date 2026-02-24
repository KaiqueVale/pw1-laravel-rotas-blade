# Mini Sistema Laravel - Rotas e Blade

[cite_start]Repositório destinado à entrega da atividade de Programação Web I, desenvolvida no framework Laravel utilizando a arquitetura MVC[cite: 1, 3, 13].

## 🧑‍🎓 Identificação do Aluno
* [cite_start]**Nome:** Kaique do Vale Soares [cite: 71, 72]
* [cite_start]**Curso:** Análise e Desenvolvimento de Sistemas (ADS) [cite: 3, 75]
* [cite_start]**Instituição:** IFCE Campus Boa Viagem [cite: 1, 2, 75]
* [cite_start]**Disciplina:** Programação Web I [cite: 3, 75]

## 🎯 Objetivo da Atividade
[cite_start]Esta atividade tem como objetivo aplicar na prática os seguintes conceitos[cite: 5, 6]:
* [cite_start]Rotas nomeadas [cite: 7]
* [cite_start]Agrupamento de rotas [cite: 8]
* [cite_start]Controllers [cite: 9]
* [cite_start]Passagem de parâmetros via URL [cite: 10]
* [cite_start]Blade Template Engine [cite: 11]
* [cite_start]Reutilização de layout com `@extends` e `@include` [cite: 12]
* [cite_start]Estrutura MVC (Model-View-Controller) [cite: 13]

## 📂 Estrutura de Rotas
[cite_start]O sistema foi construído com as seguintes rotas[cite: 42]:

[cite_start]**Rotas Principais:** [cite: 43]
* [cite_start]`/` (Página Principal) [cite: 44]
* [cite_start]`/sobrenos` [cite: 45]
* [cite_start]`/contato` [cite: 46]
* [cite_start]`/login` [cite: 47]

[cite_start]**Grupo de Rotas (Prefixo `/app`):** [cite: 48]
* [cite_start]`/app/clientes` (Listagem com `@foreach` e validações) [cite: 49, 68]
* [cite_start]`/app/fornecedores/{nome}/{status}/{categoria}` (Passagem de parâmetros via URL) [cite: 50, 52, 53, 54]
* [cite_start]`/app/produtos/{nome?}/{preco?}` (Desafio com parâmetros opcionais) [cite: 51]

---

## 🚀 Como rodar o projeto localmente

[cite_start]Como as pastas `vendor/`, `node_modules/` e o arquivo `.env` não são enviados para o GitHub[cite: 24, 25, 26, 27], siga os passos abaixo para rodar o projeto na sua máquina após clonar o repositório:

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
