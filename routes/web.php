<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fahri', function () {
    return 'Hobi saya mancing';
});

Route::get('/fahri', function() {
    return 'Halo Fikri';
});

Route::get('{param1}/{param2}/fahri', function() {
    return 'Halo fahri';
});

Route::get('/{param1}/nama/', function ($param1) {
    if($param1 == 'fahri')
        return 'lega';
    else
        return 'Nama saya: '.$param1;
});

 Route::get('/home',[HomeController::class,'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');