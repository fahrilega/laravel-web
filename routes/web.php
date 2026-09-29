<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\HomeController;


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

Route::get('/question', [QuestionController::class, 'index'])->name('question.index');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');