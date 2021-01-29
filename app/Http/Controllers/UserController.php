<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function listUser()
    {
        echo "<h1>Listagem de Usuário</h1>";
    }
    public function contatos()
    {
        return view('ViewContatos');
    }
}
