<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class TranscriptSummarizer extends Component
{
    public $transcript = 'Oke, jadi hari ini kita mulai pengenalan tentang kecerdasan buatan, atau lebih populer disebut sebagai AI, singkatan dari Artificial Intelligence. Jadi, apa sih sebenarnya kecerdasan buatan itu? Secara sederhana, kecerdasan buatan adalah simulasi proses kecerdasan manusia yang dijalankan oleh mesin, terutama komputer. Jadi, intinya, kita mencoba membuat mesin atau program yang bisa "berpikir" atau "mengambil keputusan" layaknya manusia.

Awalnya, konsep AI ini sebenarnya sudah ada sejak tahun 1950-an, waktu itu idenya masih sederhana. Orang-orang hanya berpikir, "Bisakah kita membuat mesin yang bisa memecahkan masalah seperti manusia?" Dan dari situ mulai berkembang. Jadi, ketika kita berbicara tentang AI, kita sebenarnya sedang berbicara tentang program atau algoritma yang memungkinkan komputer untuk belajar dari data, memecahkan masalah, atau bahkan berinteraksi dengan manusia. Misalnya, kalau kalian pernah menggunakan Siri, Alexa, atau Google Assistant, kalian sudah berinteraksi dengan AI.

Selanjutnya, kita akan bahas dua jenis utama AI. Pertama, ada yang disebut "Narrow AI" atau AI lemah. Ini adalah jenis AI yang fokusnya sangat spesifik. Misalnya, sistem rekomendasi di Netflix atau YouTube, yang menyarankan video atau film berdasarkan apa yang sering kalian tonton. Itu adalah contoh Narrow AI, di mana sistem tersebut hanya punya satu tugas khusus—merekomendasikan. Tapi jangan salah, AI ini sangat umum, dan hampir semua aplikasi AI yang kita gunakan sehari-hari termasuk ke dalam kategori Narrow AI.

Jenis AI yang kedua, yang lebih "besar" atau ambisius, kita sebut sebagai "General AI" atau kecerdasan buatan umum. Ini adalah konsep AI yang bisa melakukan berbagai tugas yang biasanya memerlukan kecerdasan manusia, misalnya membuat keputusan kompleks, berpikir kreatif, atau bahkan memahami emosi. Jadi, kalau kalian pernah nonton film yang menggambarkan robot cerdas yang bisa melakukan banyak hal seperti manusia, itu biasanya merujuk ke General AI. Sampai sekarang, General AI masih berupa konsep, karena teknologinya belum sepenuhnya ada. Tetapi, penelitian ke arah sana terus dilakukan.

Kemudian, kita masuk ke konsep penting lainnya dalam AI, yaitu "Machine Learning." Machine Learning adalah bagian dari AI yang memungkinkan komputer untuk belajar dari data tanpa harus diprogram secara eksplisit untuk setiap tugasnya. Jadi, bayangkan kalian mengajarkan komputer untuk mengenali gambar kucing. Alih-alih kita memprogram komputer untuk mengenali kucing satu per satu, kita bisa "melatih" sistem dengan ribuan gambar kucing, dan komputer akan belajar dari data itu untuk mengenali pola-pola umum dari gambar kucing.

Di dalam Machine Learning itu sendiri ada berbagai macam teknik, salah satunya adalah "Deep Learning." Ini yang sedang populer sekarang. Deep Learning menggunakan jaringan saraf tiruan atau artificial neural networks yang terinspirasi dari otak manusia. Jadi, kalian pernah dengar kan istilah neural network? Nah, deep learning ini bekerja dengan menggunakan banyak lapisan jaringan saraf tersebut untuk memproses informasi yang sangat kompleks. Dengan teknik ini, AI bisa mencapai hasil yang mengesankan, misalnya dalam mengenali wajah, mengemudi secara otomatis, atau bahkan bermain game lebih baik daripada manusia.

AI juga punya banyak aplikasi lain, misalnya di bidang kesehatan untuk mendiagnosis penyakit, di bidang transportasi untuk mobil otonom, bahkan di keuangan untuk mendeteksi penipuan. Tapi tentu, AI juga menimbulkan banyak tantangan dan pertanyaan etis. Misalnya, apa yang akan terjadi kalau pekerjaan manusia banyak digantikan oleh AI? Atau, bagaimana kita memastikan AI digunakan untuk tujuan yang baik?

Oke, mungkin itu sekilas pengantar tentang AI untuk hari ini. Minggu depan, kita akan mulai dengan pembahasan lebih dalam tentang Machine Learning, khususnya supervised learning dan unsupervised learning. Jadi, saya harap kalian bisa membaca materi di bab 3 tentang Machine Learning sebelum pertemuan berikutnya. Ada yang mau ditanyakan? Kalau tidak ada, kita sudahi sampai sini dulu, ya. Terima kasih dan sampai minggu depan!';  // Holds the transcript content (example text)
    public $summary = '';      // Holds the generated summary
    public $mindmap = '';      // Holds the generated mindmap
    public $showSummary = false; // Toggles display of summary and mindmap

    public function summarizeText()
    {
        // Call to the OpenAI API for summarization
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY')
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'system', 'content' => 'Summarize the following text.'],
                ['role' => 'user', 'content' => $this->transcript]
            ]
        ]);

        // Process the summary and update the component
        $this->summary = $response->json('choices.0.message.content') ?? 'No summary available.';
        $this->generateMindmap();
        $this->showSummary = true;  // Display the summary and mindmap sections
    }

    public function generateMindmap()
    {
        // Generate mindmap based on summary
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

    public function render()
    {
        return view('livewire.transcript-summarizer');
    }
}

