<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class AiSummarizer extends Component
{
    public $markdownText = '';
    public $summary = '';
    public $mindmap = '';
    public $viewMode = 'summary'; // Toggle between 'summary' and 'mindmap'

    public function summarizeText()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY')
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'system', 'content' => 'Summarize the text below.'],
                ['role' => 'user', 'content' => $this->markdownText]
            ]
        ]);

        $this->summary = $response->json('choices.0.message.content') ?? 'No summary generated.';
    }

    public function generateMindmap()
    {
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
                ['role' => 'user', 'content' => $this->summary]
            ]
        ]);

        $this->mindmap = $response->json('choices.0.message.content') ?? 'No mindmap generated.';
    }

    public function toggleView($mode)
    {
        $this->viewMode = $mode;
    }

    public function render()
    {
        return view('livewire.ai-summarizer');
    }
}

