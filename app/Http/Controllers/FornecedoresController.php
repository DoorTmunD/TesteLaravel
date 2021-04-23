<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
            'nome' => 'Fornecedor 1',
            'status' => 'N',
            'cnpj' => '000',
            'ddd' => '11',
            'telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => '111',
                'ddd' => '27',
                'telefone' => '0000-1111'
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => '222',
                'ddd' => '85',
                'telefone' => '0000-2222'
            ]
            ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
};
