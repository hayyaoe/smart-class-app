<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartClass Transcript</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen justify-between">

    <!-- Header -->
    <header class="bg-gradient-to-r from-blue-600 to-blue-500 text-white py-4 text-center shadow-md">
        <h1 class="text-2xl font-extrabold tracking-wide">SmartClass</h1>
    </header>

    <!-- Transcript Section -->
    <main class="flex-grow flex justify-center items-center">
        <!-- Transcript Box -->
        <div class="bg-white w-11/12 max-w-md rounded-2xl shadow-lg p-6 flex flex-col items-center">
            <button class="bg-white text-blue-600 font-semibold text-lg px-6 py-3 rounded-full shadow-md mb-4">
                Transcript
            </button>
            <div class="overflow-y-auto h-80 w-full">
                <!-- Transcript content -->
                <p class="text-gray-500 text-sm mb-2">00:00</p>
                <p class="text-gray-700 text-justify mb-4">
                    Hari ini, saat kita memulai hari baru dalam pembelajaran, saya ingin mengingatkan kalian tentang potensi luar biasa yang dimiliki masing-masing dari kalian. Setiap pertanyaan yang kalian ajukan, setiap kesalahan yang kalian buat, dan setiap konsep baru yang kalian pahami membawa kalian lebih dekat pada diri yang sedang kalian bentuk...
                </p>
                <p class="text-gray-500 text-sm mb-2">01:55</p>
                <p class="text-gray-700 text-justify mb-4">
                    Sekarang, memulai dengan ide-ide baru dan menelusuri jalur yang berbeda adalah bagian penting dari pertumbuhan dan perkembangan...
                </p>
            </div>

            <!-- Rangkum Button -->
            <button class="bg-blue-600 text-white text-lg font-semibold py-3 px-6 rounded-full mt-4 w-full max-w-xs hover:bg-blue-700 transition duration-200 shadow-md">
                Rangkum
            </button>
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
