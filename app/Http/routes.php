<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('admin/permissions', 'Admin\\PermissionsController');
Route::resource('admin/roles', 'Admin\\RolesController');
Route::resource('admin/users', 'Admin\\UsersController');

Route::resource('sis/asegurado', 'Sis\\AseguradoController');
Route::resource('sis/personal', 'Sis\\PersonalController');
Route::resource('sis/medico', 'Sis\\MedicoController');
Route::resource('sis/medicamento', 'Sis\\MedicamentoController');
Route::resource('sis/receta', 'Sis\\RecetaController');