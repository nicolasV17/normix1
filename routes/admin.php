<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\homeController;

use App\Http\Controllers\Admin\OtecController;

//control vistas adminLTE

//plantilla principal
Route::get('',[homeController::class,'index'])->name('administracion');



// ver otecs + boton agregar otec
Route::get('/otec',[homeController::class,'otec'])->name('otec');


//formulario de ingreso de otec
Route::get('/otec/ingresar',[homeController::class,'vista_crear'])->name('vista_crear');

//formulario para editar otec
Route::get('/otec/editar/{otec}',[homeController::class,'vista_editar'])->name('vista_editar');






// crud Otec

//crear
Route::post('/otec/crear',[OtecController::class,'crear'])->name('crear_otec');

//eliminar
Route::delete('/otec/eliminar/{id}',[OtecController::class,'eliminar'])->name('eliminar_otec');

//editar
Route::put('/otec/editar',[OtecController::class,'editar'])->name('editar_otec');