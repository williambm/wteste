<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    public function listar()
    {
        $produtos = new Produto();
        $produtos=$produtos->getListaDeProdutos();
        return view ('ViewProdutoListar', compact('produtos'));
    }
}
