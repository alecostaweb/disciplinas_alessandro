<?php

Route::get('/', 'DisciplinaController@index');
Route::get('/disciplinas/create', 'DisciplinaController@create');

Route::post('/disciplinas', 'DisciplinaController@store');
