<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AudioController;

Route::get('/', function () {
    return view('home_view');
});

Route::get('/transcript_view', function () {
    return view('transcript_view');
});

Route::get('/vc_view', function () {
    return view('vc_view');
});

Route::get('/setting_view', function () {
    return view('setting_view');
});

Route::post('/upload-audio', [AudioController::class, 'uploadAudio']);
