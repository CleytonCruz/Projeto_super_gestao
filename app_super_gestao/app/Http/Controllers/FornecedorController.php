<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores= [
            0 => ['nome'=>'propex','status'=>'N','cnpj'=>'00.000.00/000-00','ddd'=>'85'],
            1 => ['nome'=>'fertipar','status'=>'s','ddd'=>'45'],
            2 => ['nome'=>'sudeste','status'=>'N','cnpj'=>'00.000.00/000-00','ddd'=>'41']
        ];

        $msg = isset($fornecedores[1]['cnpj']) ? 'cnpj informado':'cnpj nao informado';
        

        echo $msg;
        
        
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
