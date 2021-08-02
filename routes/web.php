<?php

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

Route::get('/', 'HomeController@index');

#region Proveedor
Route::get('Proveedor/delete/{id}','ProveedorController@DeletePro')->name('DeleteProveedor');

Route::get('Proveedor/update/{id}','ProveedorController@UpdatePro')->name('UpdateProveedor');

Route::get('Proveedor/view', 'ProveedorController@ViewPro')->name('ViewProveedor');

Route::get('Proveedor/insert', 'ProveedorController@ViewInsert')->name('insertpro');

Route::post('Proveedor/insert', 'ProveedorController@InsertPro')->name('InsertProveedor');

Route::post('Proveedor/update','ProveedorController@UpdateDataBasePro')->name('UpdateDataBaseProveedor');
#endregion

Route::get('Producto/insert', 'ProductoController@InsertProd')->name('InsertProd');

Route::post('Producto/insert', 'ProductoController@InsertProducto')->name('InsertProducto');

Auth::routes();

Route::resource('salario', 'SalarioController');

Route::resource('factura', 'ClientehasproductController');

Route::resource('cliente', 'ClienteController');

Route::get('/home', 'HomeController@index')->name('home');