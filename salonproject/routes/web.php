<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Frontend.Home');
});


Route::get('/Service',function(){
    return view('Frontend.Service');
});