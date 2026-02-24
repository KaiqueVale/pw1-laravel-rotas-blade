<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {

        $clientes = [
            ['nome' => 'Samela', 'cidade' => 'Boa Viagem', 'status' => 'Ativo'],
            ['nome' => 'Mario', 'cidade' => 'Boa Viagem', 'status' => 'Ativo'],
            ['nome' => 'Marco', 'cidade' => 'Fortaleza', 'status' => 'Inativo'],
            ['nome' => 'Lauro', 'cidade' => 'Madalena', 'status' => 'Ativo']
        ];

       
        return view('clientes', compact('clientes'));
    }
}