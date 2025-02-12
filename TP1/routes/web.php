<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ClientController;

Route::get('/clients', ['as' => 'clients.index', 'uses' => 'ClientController@index']);

Route::get('/clients/create', ['as' => 'clients.create', 'uses' => 'ClientController@create']);

Route::post('/clients', ['as' => 'clients.store', 'uses' => 'ClientController@store']);

Route::get('/clients/{id}', ['as' => 'clients.show', 'uses' => 'ClientController@show']);

Route::get('/clients/{id}/edit', ['as' => 'clients.edit', 'uses' => 'ClientController@edit']);

Route::put('/clients/{id}', ['as' => 'clients.update', 'uses' => 'ClientController@update']);

Route::delete('/clients/{id}', ['as' => 'clients.destroy', 'uses' => 'ClientController@destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
