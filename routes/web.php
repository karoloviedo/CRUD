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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('pacientes', function(){
    return view('pacientes.index');
})->name('pacientes.index');

/*Route::get('pacientes/create', function(){
    return view('pacientes.create');
})->name('paciente');*/

//Rutas Paciente

//Route::get('pacientes/{id}','PacienteController@show')->name('paciente.show');

Route::get('/pacientes', 'PacienteController@index')->name('pacientes.index');

Route::get('pacientes/create', 'PacienteController@create')->name('paciente.create');

Route::get('pacientes/store', 'PacienteController@store')->name('paciente.store');

Route::delete('pacientes/{id}', 'PacienteController@destroy')->name('paciente.destroy');
        
Route::get('pacientes/{id}/edit', 'PacienteController@edit')->name('paciente.edit');

Route::put('pacientes/{id}', 'PacienteController@update')->name('paciente.update');