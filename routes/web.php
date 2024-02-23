<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TransporteController;
use App\Http\Controllers\Admin\DependenciaController;
use App\Http\Controllers\Admin\LogisticaController;
use App\Http\Controllers\Admin\MantenimientoController;
use App\Http\Controllers\Admin\AsignacionController;
use App\Http\Controllers\Admin\SugerenciaController;
use App\Http\Controllers\Admin\PertrechoController;
use App\Http\Controllers\Admin\DotacionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/logisticas/pdf',[LogisticaController::class, 'pdf'])->name('admin.logisticas.pdf');
Route::get('admin/asignacions/pdf',[AsignacionController::class, 'pdf'])->name('admin.asignacions.pdf');
Route::get('admin/dependencias/pdf',[DependenciaController::class, 'pdf'])->name('admin.dependencias.pdf');
Route::get('admin/users/pdf',[UserController::class, 'pdf'])->name('admin.users.pdf');
Route::get('admin/mantenimientos/pdf',[MantenimientoController::class, 'pdf'])->name('admin.mantenimientos.pdf');
Route::get('admin/sugerencias/pdf',[SugerenciaController::class, 'pdf'])->name('admin.sugerencias.pdf');
Route::get('admin/transportes/pdf',[TransporteController::class, 'pdf'])->name('admin.transportes.pdf');
Route::get('admin/pertrechos/pdf',[PertrechoController::class, 'pdf'])->name('admin.pertrechos.pdf');
Route::get('admin/dotacions/pdf',[DotacionController::class, 'pdf'])->name('admin.dotacions.pdf');

Route::get('admin', [HomeControllers::class, 'index'])->name('admin.index');
Route::resource('admin/users', UserController::class)->names('admin.users');
Route::resource('admin/transportes', TransporteController::class)->names('admin.transportes');
Route::resource('admin/dependencias', DependenciaController::class)->names('admin.dependencias');
Route::resource('admin/logisticas', LogisticaController::class)->names('admin.logisticas');
Route::resource('admin/mantenimientos', MantenimientoController::class)->names('admin.mantenimientos');
Route::resource('admin/asignacions', AsignacionController::class)->names('admin.asignacions');

Route::resource('admin/sugerencias', SugerenciaController::class)->names('admin.sugerencias');
Route::resource('admin/pertrechos', PertrechoController::class)->names('admin.pertrechos');
Route::resource('admin/dotacions', DotacionController::class)->names('admin.dotacions');


