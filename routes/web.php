<?php

Route::get('/', 'DisciplinaController@index');
Route::resource('disciplinas', 'DisciplinaController');
