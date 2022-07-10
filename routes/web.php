<?php

use App\Http\Controllers\SubjectController;
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
    return view('Home', [
        'active_menu_header' => 'home'
    ]);
})->name('home');

Route::post('/', function () {
    return view('Home', [
        'active_menu_header' => 'home'
    ]);
})->name('homePost');

// Login.
Route::get('/login', function () {
    return view('Login');
})->name('login');

// Settings
Route::get('/{user}/config', function () {
    return view('ConfigForm', [
        'active_menu_header' => 'configurações',
        'permissão' => TRUE
    ]);
})->name('config');

// Works.
Route::get('/trabalhos', function () {
    return view('Works.ListBuilder.WorkListBuilder', [
        'active_menu_header' => 'trabalhos'
    ]);
})->name('list.work');

Route::get('/trabalhos/adiciona', function () {
    return view('Works.Forms.WorkForm', [
        'active_menu_header' => 'trabalhos',
        'variavel_dados_temporaria' => FALSE
    ]);
})->name('add.work');

Route::get('/trabalhos/{id_work}/editar', function () {
    return view('Works.Forms.WorkForm', [
        'active_menu_header' => 'trabalhos',
        'variavel_dados_temporaria' => TRUE
    ]);
})->name('edit.work');

Route::get('/trabalhos/{id_work}', function () {
    return view('Works.Forms.ViewWorkForm', [
        'active_menu_header' => 'trabalhos'
    ]);
})->name('view.work');

Route::get('/trabalhos/{id_work}/trabalho/{id_send_work}/correcao', function () {
    return view('Works.Forms.WorkCorrectionForm', [
        'active_menu_header' => 'trabalhos',
        'nome_do_trabalho' => 'Trabalho de Conclusão de Curso'
    ]);
})->name('correction.work');

Route::get('/trabalhos/{id_work}/tabalho/{id_send_work}/visualiza', function () {
    return view('Works.Forms.CorrectedWorkForm', [
        'active_menu_header' => 'trabalhos',
        'nome_do_trabalho' => 'Trabalho de Conclusão de Curso'
    ]);
})->name('view.correction');

// Subjects.
Route::get('/materias', [SubjectController::class, 'index'])->name('list.subject');
Route::get('/materias/filtros', [SubjectController::class, 'show'])->name('show.list.subject');
Route::get('/materias/adiciona', [SubjectController::class, 'create'])->name('add.subject');
Route::get('/materias/{id_subject}/editar', [SubjectController::class, 'edit'])->name('edit.subject');
Route::post('/materias/adiciona', [SubjectController::class, 'store'])->name('store.subject');
Route::post('/materias/{id_subject}/editar', [SubjectController::class, 'update'])->name('update.subject');
Route::delete('/materias/{id_subject}/delete', [SubjectController::class, 'destroy'])->name('destroy.subject');

// Teachers.
Route::get('/professores', function () {
    return view('Teachers.ListBuilder.TeacherListBuilder', [
        'active_menu_header' => 'professores'
    ]);
})->name('list.teacher');

Route::get('/professores/adiciona', function () {
    return view('Teachers.Forms.TeacherForm', [
        'active_menu_header' => 'professores',
        'variavel_dados_temporaria' => FALSE
    ]);
})->name('add.teacher');

Route::get('/professores/{id_teacher}/editar', function () {
    return view('Teachers.Forms.TeacherForm', [
        'active_menu_header' => 'professores',
        'variavel_dados_temporaria' => TRUE
    ]);
})->name('edit.teacher');

// Students.
Route::get('/alunos', function () {
    return view('Students.ListBuilder.StudentListBuilder', [
        'active_menu_header' => 'alunos'
    ]);
})->name('list.student');

Route::get('/alunos/adiciona', function () {
    return view('Students.Forms.StudentForm', [
        'active_menu_header' => 'alunos',
        'variavel_dados_temporaria' => FALSE
    ]);
})->name('add.student');

Route::get('/alunos/{id_student}/editar', function () {
    return view('Students.Forms.StudentForm', [
        'active_menu_header' => 'alunos',
        'variavel_dados_temporaria' => TRUE
    ]);
})->name('edit.student');

// Rooms.
Route::get('/salas', function () {
    return view('Classrooms.ListBuilder.ClassroomListBuilder', [
        'active_menu_header' => 'salas'
    ]);
})->name('list.classroom');

Route::get('/salas/{id_classroom}/informacoes', function () {
    return view('Classrooms.ListBuilder.ClassroomInfoListBuilder', [
        'active_menu_header' => 'salas',
        'serie' => '8',
        'sigla' => 'A',
        'periodo' => 'Tarde'
    ]);
})->name('list.info.classroom');

Route::get('/salas/adiciona', function () {
    return view('Classrooms.Forms.ClassroomForm', [
        'active_menu_header' => 'salas',
        'variavel_dados_temporaria' => FALSE
    ]);
})->name('add.classroom');

Route::get('/salas/{id_classroom}/editar', function () {
    return view('Classrooms.Forms.ClassroomForm', [
        'active_menu_header' => 'salas',
        'variavel_dados_temporaria' => TRUE
    ]);
})->name('edit.classroom');

