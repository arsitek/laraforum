<?php

use Illuminate\Support\Facades\Route;

//Route::get('/question', 'QuestionController@index');
Route::apiResource('/question', 'QuestionController');

Route::apiResource('/category', 'CategoryController');

Route::apiResource('/question/{question}/reply', 'ReplyController');
