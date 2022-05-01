<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home.
Route::get('/', function () {
    return view('home', [
        'active_menu_header' => 'home'
    ]);
})->name('home');

Route::post('/', function () {
    return view('home', [
        'active_menu_header' => 'home'
    ]);
})->name('homePost');

// Login.
Route::get('/login', function () {
    return view('login');
})->name('login');

// Settings
Route::get('/{user}/config', function () {
    return view('form.configuracoes', [
        'active_menu_header' => 'configurações',
        'permissão' => TRUE
    ]);
})->name('configurações');

// Works.
Route::get('/trabalhos', function () {
    return view('listing.trabalhos', [
        'active_menu_header' => 'trabalhos'
    ]);
})->name('listagem.trabalhos');

Route::get('/trabalhos/adiciona', function () {
    return view('form.trabalhos', [
        'active_menu_header' => 'trabalhos',
        'variavel_dados_temporaria' => FALSE
    ]);
})->name('adiciona.trabalhos');

Route::get('/trabalhos/{trabalhos}/editar', function () {
    return view('form.trabalhos', [
        'active_menu_header' => 'trabalhos',
        'variavel_dados_temporaria' => TRUE
    ]);
})->name('editar.trabalhos');

Route::get('/trabalhos/{trabalhos}', function () {
    return view('form.visualiza-trabalho', [
        'active_menu_header' => 'trabalhos'
    ]);
})->name('visualiza.trabalho');

Route::get('/trabalhos/{trabalhos}/trabalho/{trabalho}/correcao', function () {
    return view('form.correcao-trabalho', [
        'active_menu_header' => 'trabalhos',
        'nome_do_trabalho' => 'Trabalho de Conclusão de Curso'
    ]);
})->name('correcao.trabalho');

Route::get('/trabalhos/{trabalhos}/tabalho/{trabalho}/visualiza', function () {
    return view('form.visualiza-correcao', [
        'active_menu_header' => 'trabalhos',
        'nome_do_trabalho' => 'Trabalho de Conclusão de Curso'
    ]);
})->name('visualiza.correcao');

// Subjects.
Route::get('/materias', function () {
    return view('listing.materias', [
        'active_menu_header' => 'materias'
    ]);
})->name('listagem.materias');

Route::get('/materias/adiciona', function () {
    return view('form.materias', [
        'active_menu_header' => 'materias',
        'variavel_dados_temporaria' => FALSE
    ]);
})->name('adiciona.materias');

Route::get('/materias/{materia}/editar', function () {
    return view('form.materias', [
        'active_menu_header' => 'materias',
        'variavel_dados_temporaria' => TRUE
    ]);
})->name('editar.materias');

// Teachers.
Route::get('/professores', function () {
    return view('listing.professores', [
        'active_menu_header' => 'professores'
    ]);
})->name('listagem.professores');

Route::get('/professores/adiciona', function () {
    return view('form.professores', [
        'active_menu_header' => 'professores',
        'variavel_dados_temporaria' => FALSE
    ]);
})->name('adiciona.professores');

Route::get('/professores/{professor}/editar', function () {
    return view('form.professores', [
        'active_menu_header' => 'professores',
        'variavel_dados_temporaria' => TRUE
    ]);
})->name('editar.professores');

// Students.
Route::get('/alunos', function () {
    return view('listing.alunos', [
        'active_menu_header' => 'alunos'
    ]);
})->name('listagem.alunos');

Route::get('/alunos/adiciona', function () {
    return view('form.alunos', [
        'active_menu_header' => 'alunos',
        'variavel_dados_temporaria' => FALSE
    ]);
})->name('adiciona.alunos');

Route::get('/alunos/{aluno}/editar', function () {
    return view('form.alunos', [
        'active_menu_header' => 'alunos',
        'variavel_dados_temporaria' => TRUE
    ]);
})->name('editar.alunos');

// Rooms.
Route::get('/salas', function () {
    return view('listing.salas', [
        'active_menu_header' => 'salas'
    ]);
})->name('listagem.salas');

Route::get('/salas/{sala}/informacoes', function () {
    return view('listing.sala-informacoes', [
        'active_menu_header' => 'salas',
        'serie' => '8',
        'sigla' => 'A',
        'periodo' => 'Tarde'
    ]);
})->name('listagem.sala.informacoes');

Route::get('/salas/adiciona', function () {
    return view('form.salas', [
        'active_menu_header' => 'salas',
        'variavel_dados_temporaria' => FALSE
    ]);
})->name('adiciona.salas');

Route::get('/salas/{sala}/editar', function () {
    return view('form.salas', [
        'active_menu_header' => 'salas',
        'variavel_dados_temporaria' => TRUE
    ]);
})->name('editar.salas');

