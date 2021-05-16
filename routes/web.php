<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puede registrar rutas web para su aplicación. Estas
| RouteServiceProvider carga las rutas dentro de un grupo que
| contiene el grupo de middleware "web". ¡Ahora crea algo genial!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categorias', 'CategoriaController')->names('categorias');
Route::resource('clientes', 'ClienteController')->names('clientes');
Route::resource('productos', 'ProductoController')->names('productos');
Route::resource('proveedors', 'ProveedorController')->names('proveedors');
Route::resource('compras', 'CompraController')->names('compras');
Route::resource('ventas', 'VentaController')->names('ventas');

Route::get('/prueba', function () {
    return view('prueba');
});