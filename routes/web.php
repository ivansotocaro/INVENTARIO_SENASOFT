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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//Route authentication
Route::middleware(['auth'])->group(function (){

//Usuarios


Route::post('users/store', 'HomeContoller@store')->name('users.store')
->middleware('permission:users.create');

Route::get('users', 'HomeContoller@index')->name('users.index')
->middleware('permission:users.index');

Route::get('users/create', 'HomeContoller@create')->name('users.create')
->middleware('permission:users.create');


Route::put('users/{users}', 'HomeContoller@update')->name('users.update')
->middleware('permission:users.edit');


Route::get('users/{users}', 'HomeContoller@show')->name('users.show')
->middleware('permission:users.show');


Route::delete('users/{users}', 'HomeContoller@destroy')->name('users.destroy')
->middleware('permission:users.destroy');


Route::get('users/{users}/edit', 'HomeContoller@edit')->name('users.edit')
->middleware('permission:users.edit');

Route::post('users/guardar_imagen', 'HomeContoller@guardar_imagen')->name('users.guardar_imagen')
->middleware('permission:users.guardar_imagen');
   


 //Roles

 Route::post('roles/store', 'RoleContoller@store')->name('roles.store')
     ->middleware('permission:roles.create');


 Route::get('roles', 'RoleContoller@index')->name('roles.index')
     ->middleware('permission:roles.index');


 Route::get('roles/create', 'RoleContoller@create')->name('roles.create')
     ->middleware('permission:roles.create');


 Route::put('roles/{role}', 'RoleContoller@update')->name('roles.update')
     ->middleware('permission:roles.edit');


 Route::get('roles/{role}', 'RoleContoller@show')->name('roles.show')
     ->middleware('permission:roles.show');


 Route::delete('roles/{role}', 'RoleContoller@destroy')->name('roles.destroy')
     ->middleware('permission:roles.destroy');


 Route::get('roles/{role}/edit', 'RoleContoller@edit')->name('roles.edit')
     ->middleware('permission:roles.edit');



 //Bodegas

 Route::post('bodega/store', 'BodegaContoller@store')->name('bodega.store')
     ->middleware('permission:bodega.create');


 Route::get('bodega', 'BodegaContoller@index')->name('bodega.index')
     ->middleware('permission:bodega.index');


 Route::get('bodega/create', 'BodegaContoller@create')->name('bodega.create')
     ->middleware('permission:bodega.create');


 Route::put('bodega/{bodega}', 'BodegaContoller@update')->name('bodega.update')
     ->middleware('permission:bodega.edit');


 Route::get('bodega/{bodega}', 'BodegaContoller@show')->name('bodega.show')
     ->middleware('permission:bodega.show');


 Route::delete('bodega/{bodega}', 'BodegaContoller@destroy')->name('bodega.destroy')
     ->middleware('permission:bodega.destroy');


 Route::get('bodega/{bodega}/edit', 'BodegaContoller@edit')->name('bodega.edit')
     ->middleware('permission:bodega.edit');



//Provedores

Route::post('provedor/store', 'ProvedorContoller@store')->name('provedor.store')
->middleware('permission:provedor.create');


Route::get('provedor', 'ProvedorContoller@index')->name('provedor.index')
->middleware('permission:provedor.index');


Route::get('provedor/create', 'ProvedorContoller@create')->name('provedor.create')
->middleware('permission:provedor.create');


Route::put('provedor/{provedor}', 'ProvedorContoller@update')->name('provedor.update')
->middleware('permission:provedor.edit');


Route::get('provedor/{provedor}', 'ProvedorContoller@show')->name('provedor.show')
->middleware('permission:provedor.show');


Route::delete('provedor/{provedor}', 'ProvedorContoller@destroy')->name('provedor.destroy')
->middleware('permission:provedor.destroy');


Route::get('provedor/{provedor}/edit', 'ProvedorContoller@edit')->name('provedor.edit')
->middleware('permission:provedor.edit');



//Productos

Route::post('product/store', 'ProductContoller@store')->name('product.store')
->middleware('permission:product.create');


Route::get('product', 'ProductContoller@index')->name('product.index')
->middleware('permission:product.index');


Route::get('product/create', 'ProductContoller@create')->name('product.create')
->middleware('permission:product.create');


Route::put('product/{product}', 'ProductContoller@update')->name('product.update')
->middleware('permission:pproductedit');


Route::get('product/{product}', 'ProductContoller@show')->name('product.show')
->middleware('permission:product.show');


Route::delete('product/{product}', 'ProductContoller@destroy')->name('product.destroy')
->middleware('permission:product.destroy');


Route::get('product/{product}/edit', 'ProductContoller@edit')->name('product.edit')
->middleware('permission:product.edit');



//Sucursales

Route::post('sucursal/store', 'SucursalContoller@store')->name('sucursal.store')
->middleware('permission:sucursal.create');


Route::get('sucursal', 'SucursalContoller@index')->name('sucursal.index')
->middleware('permission:sucursal.index');


Route::get('sucursal/create', 'SucursalContoller@create')->name('sucursal.create')
->middleware('permission:sucursal.create');


Route::put('sucursal/{sucursal}', 'SucursalContoller@update')->name('sucursal.update')
->middleware('permission:sucursal.edit');


Route::get('sucursal/{sucursal}', 'SucursalContoller@show')->name('sucursal.show')
->middleware('permission:sucursal.show');


Route::delete('sucursal/{sucursal}', 'SucursalContoller@destroy')->name('sucursal.destroy')
->middleware('permission:sucursal.destroy');


Route::get('sucursal/{sucursal}/edit', 'SucursalContoller@edit')->name('sucursal.edit')
->middleware('permission:sucursal.edit');



//Factura

Route::post('factura/store', 'FacturaContoller@store')->name('factura.store')
->middleware('permission:factura.create');


Route::get('factura', 'FacturaContoller@index')->name('factura.index')
->middleware('permission:factura.index');


Route::get('factura/create', 'FacturaContoller@create')->name('factura.create')
->middleware('permission:factura.create');


Route::put('factura/{factura}', 'FacturaContoller@update')->name('factura.update')
->middleware('permission:factura.edit');


Route::get('factura/{factura}', 'FacturaContoller@show')->name('factura.show')
->middleware('permission:factura.show');


Route::delete('factura/{factura}', 'FacturaContoller@destroy')->name('factura.destroy')
->middleware('permission:factura.destroy');


Route::get('factura/{factura}/edit', 'FacturaContoller@edit')->name('factura.edit')
->middleware('permission:factura.edit');


//Empresa

Route::post('empresa/store', 'EmpresaContoller@store')->name('empresa.store')
->middleware('permission:empresa.create');


Route::get('empresa', 'EmpresaContoller@index')->name('empresa.index')
->middleware('permission:empresa.index');


Route::get('empresa/create', 'EmpresaContoller@create')->name('empresa.create')
->middleware('permission:empresa.create');


Route::put('empresa/{empresa}', 'EmpresaContoller@update')->name('empresa.update')
->middleware('permission:empresa.edit');


Route::get('empresa/{empresa}', 'EmpresaContoller@show')->name('empresa.show')
->middleware('permission:empresa.show');


Route::delete('empresa/{empresa}', 'EmpresaContoller@destroy')->name('empresa.destroy')
->middleware('permission:empresa.destroy');


Route::get('empresa/{empresa}/edit', 'EmpresaContoller@edit')->name('empresa.edit')
->middleware('permission:empresa.edit');



  
});


