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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/users', 'UsersController@index')->name('users.index');
Route::get('/users/create', 'UsersController@create')->name('users.create');
Route::post('/users/store', 'UsersController@store')->name('users.store');
Route::delete('/users/{user}', 'UsersController@delete')->name('users.delete');
Route::get('/users/{user}', 'UsersController@edit')->name('users.edit');
Route::post('/users/{user}', 'UsersController@update')->name('users.update');

Route::resource('projects', 'ProjectController');

Route::patch('/tasks/{task}', 'ProjectTaskController@update')->name('tasks.complete');
Route::post('/project/{project}/tasks', 'ProjectTaskController@store')->name('tasks.store');

Route::post('completed-task/{task}', 'CompletedTaskController@store')->name('completed-task.store');
Route::delete('completed-task/{task}', 'CompletedTaskController@destroy')->name('completed-task.destroy');

Auth::routes();