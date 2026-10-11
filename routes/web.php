<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'name' =>  'Syifa Fitryanti',
        'age' => 19,
    ]);
});

Route::get('/hello',function () {
    return 'Hello Laravel!';
});