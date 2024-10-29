<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartClass AI Summarizer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Font and Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: "Montserrat", sans-serif; }
        .blue-bg { background-color: #1152FD; }
        .hidden-content { display: none; }
    </style>

    <!-- Mermaid for Mindmap -->
    <script type="module">
        import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.esm.min.mjs';
        mermaid.initialize({ startOnLoad: true });
    </script>
</head>

<body class="bg-gray-100 flex flex-col min-h-screen justify-between" x-data="{ viewMode: @entangle('viewMode') }">

    <!-- Header -->
    <header class="text-white text-center fixed top-0 left-0 w-full z-10">
        <div class="blue-bg pt-12 pb-12 shadow-md rounded-b-3xl">
            <h1 class="text-4xl font-extrabold tracking-wide">SmartClass</h1>
        </div>
    </header>

    <!-- Main Section -->
    <main class="flex-grow flex flex-col px-6 mt-44 mb-32 justify-start items-center">

        <!-- Toggle Buttons -->
        <div class="flex flex-row justify-center w-full mb-6 space-x-2">
            <button @click="viewMode = 'summary'; @this.toggleView('summary')"
                    :class="viewMode === 'summary' ? 'blue-bg text-white' : 'bg-white text-blue-600'"
                    class="text-md py-3 px-6 rounded-full w-full max-w-xs hover:bg-blue-700 transition duration-200 shadow-md">
                Summary
            </button>
            <button @click="viewMode = 'mindmap'; @this.toggleView('mindmap')"
                    :class="viewMode === 'mindmap' ? 'blue-bg text-white' : 'bg-white text-blue-600'"
                    class="text-md py-3 px-6 rounded-full w-full max-w-xs hover:bg-blue-700 transition duration-200 shadow-md">
                Mind Map
            </button>
        </div>

        <!-- Summary Content (Markdown) -->
        <div class="bg-white max-w-md rounded-2xl shadow-lg p-8 w-full mb-6" x-show="viewMode === 'summary'">
            <h2 class="text-2xl font-semibold mb-2">Pythagorean Theorem</h2>
            <div id="markdown-render" class="text-black text-justify">
                <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        document.getElementById("markdown-render").innerHTML = marked.parse(@js($summary));
                    });
                </script>
            </div>
        </div>

        <!-- Mindmap Content -->
        <div class="mermaid-container bg-white max-w-md rounded-2xl shadow-lg p-8" x-show="viewMode === 'mindmap'">
            <pre class="mermaid">@js($mindmap)</pre>
        </div>

        <!-- Save Button -->
        <button class="fixed bottom-20 left-1/2 transform -translate-x-1/2 blue-bg text-white text-lg font-semibold py-3 px-6 rounded-full mt-4 max-w-xs hover:bg-blue-700 transition duration-200 shadow-md">
            Save as <span x-text="viewMode === 'summary' ? 'PDF' : 'Image'"></span>
        </button>
    </main>

</body>
</html>

