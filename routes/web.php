<?php

Route::get('/', 'DisciplinaController@index');
Route::resource('disciplinas', 'DisciplinaController');

Route::get('/disciplinas/{disciplina_id}/turmas/create','DisciplinaController@createTurma');
Route::post('/disciplinas/{disciplina_id}/turmas','DisciplinaController@storeTurma');
