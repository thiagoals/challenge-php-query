<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// Conjunto de métodos que somente usuários autenticados conseguem fazer
$router->group(
    ['prefix'=>'pessoas','middleware'=>'jwt.auth']
    , function() use ($router){
    $router->get('get',[
        'uses'=>'PessoasController@get'
    ]);
});

$router->group(
    ['prefix'=>'ordens','middleware'=>'jwt.auth']
    , function() use ($router){
    $router->get('get/{id_pessoa}',[
        'uses'=>'OrdensController@get'
    ]);
});
