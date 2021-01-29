<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;



class Curso extends Model
{
    protected $fillable = [
        'titulo','descricao','valor','imagem','publicado'
    ];

    static function eebase()
    {
        //Teste de consulta na eebase       
        $rseebase = DB::connection("eebase")->select('SELECT TOP 1000 *
        FROM EEBASE.dbmaint.pessoa where codpes=6365822');

        return $rseebase;
    }
}
