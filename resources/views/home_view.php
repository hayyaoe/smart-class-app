<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartClass Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

    <!-- Header -->
    <header class="bg-gradient-to-r from-blue-600 to-blue-500 text-white py-4 text-center shadow-md fixed w-full z-10">
        <h1 class="text-3xl font-extrabold">Welcome to SmartClass</h1>
        <p class="mt-2 text-lg">Your smart learning companion</p>
    </header>

    <!-- Main Section -->
    <main class="flex-grow mt-32 mb-24 flex flex-col items-center justify-center p-6">
        <section class="bg-white w-full max-w-2xl rounded-2xl shadow-lg p-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Enhance Your Learning Experience</h2>
            <p class="text-gray-700 mb-6">
                SmartClass helps you record, transcribe, and summarize your lectures effortlessly. Focus on learning while we handle the notes!
            </p>
            <button class="bg-blue-600 text-white text-lg font-semibold py-3 px-6 rounded-full hover:bg-blue-700 transition duration-200 shadow-md">
                Get Started
            </button>
        </section>

        <!-- Features Section -->
        <section class="mt-12 w-full max-w-5xl text-center">
            <h2 class="text-2xl font-bold mb-6">Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200">
                    <i class="fas fa-microphone-alt text-4xl text-blue-500 mb-3"></i>
                    <h3 class="font-semibold text-xl mb-2">Record Lectures</h3>
                    <p class="text-gray-600">Capture every word spoken in your lectures with high-quality audio recordings.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200">
                    <i class="fas fa-file-alt text-4xl text-blue-500 mb-3"></i>
                    <h3 class="font-semibold text-xl mb-2">Transcription</h3>
                    <p class="text-gray-600">Automatically transcribe audio recordings into text for easy review and study.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200">
                    <i class="fas fa-lightbulb text-4xl text-blue-500 mb-3"></i> <!-- Changed icon for Summarization -->
                    <h3 class="font-semibold text-xl mb-2">Summarization</h3>
                    <p class="text-gray-600">Get concise summaries of your lectures to reinforce learning and retention.</p>
                </div>
            </div>
        </section>


        <!-- Testimonials Section -->
        <section class="mt-12 w-full max-w-2xl text-center">
            <h2 class="text-2xl font-bold mb-6">What Our Users Say</h2>
            <blockquote class="bg-white p-6 rounded-lg shadow-md">
                <p class="text-gray-600 italic">"SmartClass has transformed the way I study! I can focus on learning without worrying about taking notes."</p>
                <footer class="mt-4 font-semibold">— Evan Tanuwijaya.</footer>
            </blockquote>
        </section>

        <!-- Call to Action -->
        <section class="mt-12 w-full max-w-2xl text-center">
            <h2 class="text-2xl font-bold mb-6">Ready to Get Started?</h2>
            <button class="bg-blue-600 text-white text-lg font-semibold py-3 px-6 rounded-full hover:bg-blue-700 transition duration-200 shadow-md">
                Join SmartClass Today!
            </button>
        </section>
    </main>

    <!-- Bottom Navigation Bar -->
    <nav class="bg-white text-gray-600 shadow-t-lg py-3 flex justify-around items-center fixed bottom-0 inset-x-0">
        <a href="#" class="flex flex-col items-center hover:text-blue-500 transition duration-200">
            <i class="fas fa-home text-2xl"></i>
            <span class="text-xs font-medium">Home</span>
        </a>
        <a href="#" class="flex flex-col items-center hover:text-blue-500 transition duration-200">
            <i class="fas fa-book text-2xl"></i>
            <span class="text-xs font-medium">Notes</span>
        </a>
        {{-- <a href="#" class="flex flex-col items-center hover:text-blue-500 transition duration-200">
            <i class="fas fa-microphone-alt text-2xl"></i>
            <span class="text-xs font-medium">Record</span>
        </a> --}}
        <a href="#" class="flex flex-col items-center hover:text-blue-500 transition duration-200">
            <i class="fas fa-cog text-2xl"></i>
            <span class="text-xs font-medium">Settings</span>
        </a>
    </nav>

</body>
</html>
