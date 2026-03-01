<?php

use Illuminate\Support\Facades\Route;

// Route::get('/home', function () {
//     return view('welcome');
// });






// ROTAS ------------------------------------------------
// para comentar varias linhas, ctrl + k + c


//------------------------------------------------------------

//1. retornar uma VIEW. Criar uma route, no caso "/jogos" e retornar uma view chamada 'jogos'. 
//----> para criar essa view, vá em resources, views e digitar jogos.blade.php
//----> Para mostrar essa view na web, digitar a rota "/jogos" depois do endereço 127.0.0.1:8000 ==> 127.0.0.1:8000/jogos
       
// Route::view('/jogos', 'jogos');






//------------------------------------------------------------




//2. retornar um TEXTO.


// Route::get('/games', function(){
//     return "Curso de Laravel do  Joao";
// });






//---------------------------------------

//3. enviar e retornar um parametro para minhas views

//Parametro Estatico:
//Route::view('/jogos', 'jogos', ['name' => 'GTA']);
// <p>{{$nomeJogo}}</p>  ->colocar no jogos.blade.php







// //Parametro dinamico:----------------------------------------------------
// Route::get('/jogos/{name?}', function($name = null){
//     return view('jogos', ['nomeJogo' =>$name]);
// });



// //-> Parametro dinamico para receber apenas texto:
// Route::get('/jogos/{name?}', function($name = null){
//     return view('jogos', ['nomeJogo' =>$name]);
// })->where('name', '[A-Za-z]+');


//-> Parametro dinamico para receber apenas numeros:
// Route::get('/jogos/{id?}', function($id = null){
//     return view('jogos', ['idJogo' =>$id]);
// })->where('id', '[0-9]+');
// <p>{{$idJogo}}</p> ->colocar no jogos.blade.php



//-> Parametro dinamico para receber apenas texto e numeros:
// Route::get('/jogos/{id?}/{name?}', function($id = null, $name = null){
//     return view('jogos', ['idJogo' => $id,'nomeJogo' => $name]);
// })->where(['id' => '[0-9]+','name' => '[a-z]+']);

//  <p>Nome do Jogo: {{$nomeJogo}}</p> <p>Id do Jogo: {{$idJogo}}</p>->colocar no jogos.blade.php
//     //Escrever na web 127.0.0.1:8000/jogos/4343/edf



//---------------------------------------------------








//4. botão
//  Route::get('/jogos', function () {
//      return view('jogos');
// });
// <a href="#">Clique aqui/a>->colocar no jogos.blade.php


// -> Clicar em botão para ele redirecionar para outra rota
//  Route::get('/jogos', function () {
//      return view('jogos');
// });
// Route::get('/home', function () {
//       return view('Welcome');
// })->name('home-index');
// // <a href="{{ route('home-index') }}">Clique aqui</a> ->colocar no jogos.blade.php
// //Para sinalizar erro ao redirecionar telas, adicionar:
//  Route::fallback(function(){
//     return "Erro ao localizar tela";
//  });
