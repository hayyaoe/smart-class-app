<div class="flex flex-col min-h-screen justify-between bg-gray-100">

    <!-- Header -->
    <header class="text-white text-center fixed top-0 left-0 w-full z-10">
        <div class="blue-bg pt-12 pb-12 shadow-md rounded-b-3xl">
            <h1 class="text-4xl font-extrabold tracking-wide">smartclass</h1>
        </div>

        <!-- Page Title -->
        <div class="fixed top-20 left-1/2 transform -translate-x-1/2 w-80 z-50">
            <div class="bg-white text-blue-600 font-semibold text-lg px-6 py-3 rounded-full shadow-lg w-full">
                <h2 class="text-xl font-semibold">Transcript Summarizer</h2>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow flex px-6 mt-40 mb-32 justify-center items-start">
        <div class="max-w-md px-3 py-6 flex flex-col items-center">

            <!-- Transcript Section -->
            <div class="overflow-y-auto h-full w-full mb-6">
                <p class="text-gray-500 text-sm mb-2">Transcript:</p>
                <p class="text-gray-700 text-justify mb-4">
                    {{ $transcript }}
                </p>
            </div>

            <!-- Summarize Button -->
            <button wire:click="summarizeText"
                    class="blue-bg text-center text-white text-lg font-semibold py-3 px-6 rounded-full w-full max-w-xs hover:bg-blue-700 transition duration-200 shadow-md">
                Summarize
            </button>

            <!-- Display Summary and Mindmap -->
            @if($showSummary)
                <div class="bg-white max-w-md flex flex-col items-center rounded-2xl shadow-lg mt-8 p-6 w-full">
                    <h2 class="text-xl font-semibold mb-4 text-blue-600">Summary</h2>
                    <p class="text-black text-justify mb-4">{{ $summary }}</p>

                    <h2 class="text-xl font-semibold mb-4 text-blue-600">Mindmap</h2>
                    <div id="mindmap-container" class="mermaid">
                        {!! $mindmap !!}
                    </div>
                </div>
            @endif
        </div>
    </main>

    <!-- Bottom Navigation Bar -->
    <nav class="bg-white text-gray-600 shadow-t-lg py-3 flex justify-around items-center fixed bottom-0 inset-x-0 z-40">
        <a href="/" class="flex flex-col items-center hover:text-blue-500 transition duration-200">
            <i class="fas fa-home text-2xl"></i>
            <span class="text-xs font-medium">Home</span>
        </a>
        <a href="/transcript_view" class="flex flex-col items-center hover:text-blue-500 transition duration-200">
            <i class="fas fa-book text-2xl"></i>
            <span class="text-xs font-medium">Notes</span>
        </a>
        <a href="/vc_view" class="flex flex-col items-center hover:text-blue-500 transition duration-200">
            <i class="fas fa-microphone-alt text-2xl"></i>
            <span class="text-xs font-medium">Record</span>
        </a>
        <a href="/setting_view" class="flex flex-col items-center hover:text-blue-500 transition duration-200">
            <i class="fas fa-cog text-2xl"></i>
            <span class="text-xs font-medium">Settings</span>
        </a>
    </nav>

    <!-- Mermaid.js Initialization -->
    <script type="module">
        document.addEventListener('livewire:load', function () {
            Livewire.on('summarizeCompleted', function () {
                import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.esm.min.mjs';
                mermaid.initialize({ startOnLoad: true });
                mermaid.contentLoaded();
            });
        });
    </script>
</div>
