<?php

Route::get('/', 'DisciplinaController@index');
Route::resource('disciplinas', 'DisciplinaController');
Route::post('/disciplinas/search','DisciplinaController@search');

Route::get('/disciplinas/{disciplina_id}/turmas/create','DisciplinaController@createTurma');
Route::post('/disciplinas/{disciplina_id}/turmas','DisciplinaController@storeTurma');

Auth::routes();

Route::get('/home', 'DisciplinaController@index')->name('home');

