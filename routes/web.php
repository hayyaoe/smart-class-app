<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AudioController;


use App\Http\Livewire\TranscriptSummarizer;

Route::get('/transcript-summarizer', function () {
    return view('livewire.transcript-summarizer');
})->name('transcript.summarizer');

Route::get('/', function () {
    return view('home_view');
});

Route::get('/sum', function () {
    return view('summarize');
});

Route::get('/res', function () {
    return view('result');
});

Route::get('/mindmap', function () {
    return view('mindmap');
});

Route::get('/transcript_view', function () {
    return view('transcript_view');
});

Route::get('/vc_view', function () {
    return view('vc_view');
});

Route::get('/summary_view', function(){
    return view('summary_view');
});

Route::get('/setting_view', function () {
    return view('setting_view');
});


Route::post('/upload-audio', [AudioController::class, 'uploadAudio']);

Route::get('/mindmap', function () {
    return view('mindmap');
});

