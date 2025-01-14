<?php

use App\Http\Controllers\ColegioController;
use App\Http\Controllers\GestionController;
use App\Http\Livewire\Pruebas\ShowPosts;
use App\Models\Colegio;
use App\Models\Gestion;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/example', function () {
    $datos = Gestion::all();
    //dd($datos[0]);
    $backend = 'esto viene del backend';
    return view('example',[
        'datos'=> $datos,
        'value' => $backend,
        'title' => 'Usuarios'
    ]);
});


// Route::get('/c', function () {
//     return view('layout');
// });


Route::resource('/colegio',ColegioController::class);
Route::resource('/gestion',GestionController::class);
