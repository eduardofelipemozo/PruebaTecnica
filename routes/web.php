<?php

use Illuminate\Support\Facades\Route;
use App\Models\llantas;
use App\Http\Controllers\PracticaController;
use App\Http\Controllers\llantera;
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
    
    $llantas = llantas::all();
    return view('welcome')->with('llantas',$llantas);
});

Route::get('/nuevallanta', function () {
    return view('nuevallanta');
});
Route::post('/guardarllanta', [PracticaController::class,'guardarllanta'])->name('guardarllanta');

Route::get('eliminar/{id}',  [PracticaController::class,'eliminar'])->name('eliminar');
Route::get('modificar/{id}',  [PracticaController::class,'modificar'])->name('modificar');
Route::post('/guardarcambios/{id}', [PracticaController::class,'guardarcambios'])->name('guardarcambios');
