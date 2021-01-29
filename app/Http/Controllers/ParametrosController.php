<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParametrosController extends Controller
{
    public function acessandoParametrosViaRequest(Request $request)
    {
        //Poderia ser qualquer lógica com o BD
        $produtos = array("PHP", "Java", "C","IOS");
        if(isset($request->prodId))
        {
            $buffer = "Curso selecionado: ".$produtos[$request->prodId];
        }
        else
        {
            $buffer = "Nenhum Curso Selecionado";
        }   

        return view ('ViewAcessandoParametros',compact('buffer'));
    }

    public function formularioExibir()
    {
        return view ('ViewFormularioExibir');
    }

    public function formularioReceber(Request $request)
    {
        $buffer ="Via formulário: ";

        if(isset($request->nomeUsuario))
        {
            $buffer .=$request->nomeUsuario;
        }
        return view('ViewFormularioReceber',compact('buffer'));
    }
}
