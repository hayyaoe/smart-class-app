<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TextSummaryController extends Controller
{
    // Display form for input
    public function index()
    {
        return view('summarize');
    }

    // Summarize the provided text
    public function summarize(Request $request)
    {
        $text = $request->input('text');

        // OpenAI API call for summarization
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY')
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'system', 'content' => 'Summarize the text below.'],
                ['role' => 'user', 'content' => $text]
            ]
        ]);

        if ($response->successful()) {
            // Retrieve summary from response
            $summary = $response->json('choices.0.message.content');

            // Check if summary is empty and log if necessary
            if (empty($summary)) {
                Log::warning('Received empty summary from OpenAI API.', ['response' => $response->json()]);
                return view('result', ['summary' => 'No summary generated. Please check your input and try again.']);
            }

            return view('result', compact('summary'));
        } else {
            // Log error response for debugging
            Log::error('OpenAI API request failed.', ['response' => $response->json()]);
            return back()->with('error', 'Failed to summarize text. Please try again later.');
        }
    }

    // Generate Mermaid.js mindmap based on summary
    public function generateMindmap(Request $request)
    {
        $summary = $request->input('summary');

        // Generate Mermaid Mindmap structure
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY')
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'system', 'content' => 'Please convert the following text into a Mermaid.js mindmap format. Follow this exact structure:

mindmap
  root: [Main Topic]
    First sub-topic
      Sub-topic detail
    Second sub-topic
      Another sub-topic detail
        Nested detail

Each level should be indented with two spaces, and each node should be on a new line. Do not add any extra text or explanations. Just output the Mermaid.js code in the requested format.

Text for mindmap:'],
                ['role' => 'user', 'content' => $summary]
            ]
        ]);

        if ($response->successful()) {
            $mindmap = $response->json('choices.0.message.content');

            Log::info($mindmap);

            // Check if mindmap content is empty and log
            if (empty($mindmap)) {
                Log::warning('Received empty mindmap from OpenAI API.', ['response' => $response->json()]);
                return view('mindmap', ['mindmap' => 'No mindmap generated. Please check your summary and try again.']);
            }

            return view('mindmap', compact('mindmap'));
        } else {
            // Log error response
            Log::error('OpenAI API request failed for mindmap.', ['response' => $response->json()]);
            return back()->with('error', 'Failed to generate mindmap. Please try again later.');
        }
    }
}
