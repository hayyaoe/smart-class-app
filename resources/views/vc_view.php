<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartClass Voice Recording</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen justify-between">

    <!-- Header -->
    <header class="bg-gradient-to-r from-blue-600 to-blue-500 text-white py-4 text-center shadow-md">
        <h1 class="text-2xl font-extrabold tracking-wide">SmartClass</h1>
    </header>

    <!-- Main Content -->
    <main class="flex-grow flex flex-col items-center justify-center">
        <!-- Voice Recording Section -->
        <div class="bg-white p-8 rounded-2xl shadow-lg w-11/12 max-w-md text-center">
            <h2 class="text-xl text-blue-600 font-semibold mb-4">Voice Recording</h2>

            <!-- Mic Icon -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-500 text-white rounded-full p-8 inline-block shadow-md mb-6">
                <i class="fas fa-microphone text-5xl"></i>
            </div>

            <!-- Sound Wave Simulation -->
            <div class="w-full h-4 bg-gray-200 rounded-full overflow-hidden mb-8 shadow-inner">
                <div class="h-4 bg-gradient-to-r from-blue-600 to-blue-400 w-3/4"></div>
            </div>

            <!-- Recording Controls -->
            <div class="flex justify-center space-x-10">
                <button class="text-red-500 hover:text-red-700 transition duration-200 text-4xl">
                    <i class="fas fa-stop-circle"></i>
                </button>
                <button class="text-blue-500 hover:text-blue-700 transition duration-200 text-4xl">
                    <i class="fas fa-pause-circle"></i>
                </button>
            </div>
        </div>
    </main>

   <!-- Bottom Navigation Bar -->
<nav class="bg-white text-gray-600 shadow-t-lg py-3 flex justify-around items-center fixed bottom-0 inset-x-0">
    <a href="{{ url('/') }}" class="flex flex-col items-center hover:text-blue-500 transition duration-200">
        <i class="fas fa-home text-2xl"></i>
        <span class="text-xs font-medium">Home</span>
    </a>
    <a href="{{ url('/transcript_view') }}" class="flex flex-col items-center hover:text-blue-500 transition duration-200">
        <i class="fas fa-book text-2xl"></i>
        <span class="text-xs font-medium">Notes</span>
    </a>
    <a href="{{ url('/vc_view') }}" class="flex flex-col items-center hover:text-blue-500 transition duration-200">
        <i class="fas fa-microphone-alt text-2xl"></i>
        <span class="text-xs font-medium">Record</span>
    </a>
    <a href="#" class="flex flex-col items-center hover:text-blue-500 transition duration-200">
        <i class="fas fa-cog text-2xl"></i>
        <span class="text-xs font-medium">Settings</span>
    </a>
</nav>


</body>
</html>
