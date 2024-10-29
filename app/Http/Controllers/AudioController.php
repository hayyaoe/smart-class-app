<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AudioController extends Controller
{
    public function uploadAudio(Request $request)
    {
        $request->validate([
            'audio' => 'required|mimes:audio/wav|max:10240',
        ]);

        $path = $request->file('audio')->store('public/audio');
        return response()->json(['message' => 'Audio uploaded successfully', 'path' => $path]);
    }
}
