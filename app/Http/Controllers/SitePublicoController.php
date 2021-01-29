<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitePublicoController extends Controller
{
    public function paginaPrincipal()
    {
        $usuario = "Bud";
        return view ('ViewPrincipal')->with('usuario',$usuario);
        /* Com With só se passa uma variável por vez, pode ser feito cambalacho de passar por array
        mas não é legal! para resolver isso podems usar o COMPACT */
    }

    public function produtos()
    {
        $produtos = array("TV","Celular","Computador","Fogão");
        return view ('ViewProdutos')->with('produtos',$produtos);
    }

    public function informacoes()
    {
        //USANDO COMPACT
        $usuario = "Bud";
        $produtos = array("TV","Celular","Computador","Fogão");
        return view ('ViewInformacoes', compact('usuario','produtos'));
    }
}
