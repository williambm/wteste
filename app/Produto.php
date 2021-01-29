<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function getListaDeProdutos()
    {
        //Acesso ao BD
        //Consumir Web Service
        //Ler Arquivo

        return array("PHP","Java","C++","Assembly");
    }
    
}
