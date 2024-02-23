<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TransporteController;
use Illuminate\Support\Facades\Route;

Route::get('admin', [HomeControllers::class, 'index'])->name('admin.index');
