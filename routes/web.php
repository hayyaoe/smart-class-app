<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/transcript_view', function () {
    return view('transcript_view');
});

Route::get('/vc_view', function () {
    return view('vc_view');
});

