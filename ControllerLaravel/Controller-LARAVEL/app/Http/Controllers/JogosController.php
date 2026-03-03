<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index(){
       // dd('Olá Mundo!'); //Para retornar um texto - dd é um tipo de texto mais estilizado
       $nome = 'Mulan';
       $jogoFav = 'Valorant';
       $id = 1;
       return view('jogos', ['nome' => $nome, 'jogoFav' => $jogoFav, 'id' => $id]);
    }
}
