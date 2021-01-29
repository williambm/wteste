<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Curso;


class CursoController extends Controller
{
    public function index()
    {
        $registros= Curso::all(); //pega todos os registros de cursos do BD
        $rseebase= Curso::eebase(); //O Retorno da Base replicada fica como array[0] com objeto dentro ex..: array[0]->codpes
        
        
        return view ('admin.cursos.index', compact('registros','rseebase'));
    }

    public function adicionar()
    {
        return view('admin.cursos.adicionar');
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();
        //quando se tem Imagem na requisição tem que fazer um tratamento
        //Tratamento
        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            //altera nome do arquivo com numeros randomicos
            $num = rand(1111,9999);
            //diretório onde será salvo
            $dir = "img/cursos/";
            //Pega variável do arquivo
            $ex = $imagem->guessClientExtension();
            //monta o nome do arquivo com a extensão
            $nomeImagem = "imagem_".$num.".".$ex;
            //Move o arquivo para o diretório correto
            $imagem->move($dir,$nomeImagem);
            //acertando o caminho da imagem que vai ser salvo no BD
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        //Tatamento do checkbox
        if(isset($dados['publicado'])){
            $dados['publicado']='Sim';
        }else{
            $dados['publicado']='Nao';
        }
        //Salva todos os dados
        Curso::create($dados);
        //retorna a admin.cursos
        return redirect()->route('admin.cursos');
    }

    public function editar($id)
    {
        $registro = Curso::find($id);
        return view ('admin.cursos.editar', compact('registro'));
    }

    public function atualizar(Request $request, $id)
    {
        $dados = $request->all();
        //quando se tem Imagem na requisição tem que fazer um tratamento
        //Tratamento
        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            //altera nome do arquivo com numeros randomicos
            $num = rand(1111,9999);
            //diretório onde será salvo
            $dir = "img/cursos/";
            //Pega variável do arquivo
            $ex = $imagem->guessClientExtension();
            //monta o nome do arquivo com a extensão
            $nomeImagem = "imagem_".$num.".".$ex;
            //Move o arquivo para o diretório correto
            $imagem->move($dir,$nomeImagem);
            //acertando o caminho da imagem que vai ser salvo no BD
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        //Tatamento do checkbox
        if(isset($dados['publicado'])){
            $dados['publicado']='Sim';
        }else{
            $dados['publicado']='Nao';
        }
        //Salva todos os dados (atualizar é find id depois update !!!)
        Curso::find($id)->update($dados);
        //retorna a admin.cursos
        return redirect()->route('admin.cursos');
    }

    public function deletar($id)
    {
        Curso::find($id)->delete();
        return redirect()->route('admin.cursos');
    }
}
