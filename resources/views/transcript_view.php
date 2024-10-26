<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartClass Transcript</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Import Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }

        .blue-bg{
            background-color: #1152FD;
        }
        
    </style>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen justify-between">

    <!-- Header -->
    <header class="text-white text-center relative">
        <div class="blue-bg pt-12 pb-12 shadow-md rounded-b-3xl fixed top-0 left-0 w-full z-10"> <!-- Changed 'relative' to 'fixed' -->
            <h1 class="text-4xl font-extrabold tracking-wide">smartclass</h1>
        </div>
        
        <!-- Transcript Button -->
        <div class="fixed top-20 left-1/2 transform -translate-x-1/2 translate-y-1/2 w-80 z-50">
            <div class="bg-white text-blue-600 font-semibold text-lg px-6 py-3 rounded-full shadow-lg w-full">
                <h2 class="text-xl font-semibold"> Transcript </h2>
            </div>
        </div>
    </header>

    <!-- Transcript Section -->
    <main class="flex-grow flex px-6 mt-40 mb-32 justify-center items-start"> <!-- Adjusted mt-6 to mt-24 to account for the fixed header -->
        <!-- Transcript Box -->
        <div class="max-w-md px-3 py-6 flex flex-col items-center">
            <div class="overflow-y-auto h-full w-full">
                <!-- Transcript content -->
                <p class="text-gray-500 text-sm mb-2">00:00</p>
                <p class="text-gray-700 text-justify mb-4">
                    Hari ini, saat kita memulai hari baru dalam pembelajaran, saya ingin mengingatkan kalian tentang potensi luar biasa yang dimiliki masing-masing dari kalian. Setiap pertanyaan yang kalian ajukan, setiap kesalahan yang kalian buat, dan setiap konsep baru yang kalian pahami membawa kalian lebih dekat pada diri yang sedang kalian bentuk...
                </p>
                <p class="text-gray-500 text-sm mb-2">01:55</p>
                <p class="text-gray-700 text-justify mb-4">
                    Hari ini, saat kita memulai hari baru dalam pembelajaran, saya ingin mengingatkan kalian tentang potensi luar biasa yang dimiliki masing-masing dari kalian. Setiap pertanyaan yang kalian ajukan, setiap kesalahan yang kalian buat, dan setiap konsep baru yang kalian pahami membawa kalian lebih dekat pada diri yang sedang kalian bentuk. Belajar bukan hanya tentang mendapatkan jawaban yang benar; ini tentang perjalanan memahami, mengeksplorasi, dan tumbuh. Jadi, jangan takut untuk menyelami pelajaran hari ini dengan rasa ingin tahu dan percaya diri, mengetahui bahwa setiap usaha kalian adalah langkah menuju kesuksesan.
                </p>
            </div>

            <!-- Rangkum Button -->
            <a href = "/summary_view?" class="fixed bottom-24 left-1/2 transform -translate-x-1/2 blue-bg text-center text-white text-lg font-semibold py-3 px-6 rounded-full mt-4 w-full max-w-xs hover:bg-blue-700 transition duration-200 shadow-md">
                Summarize
            </a>
        </div>
    </main>

    <!-- Bottom Navigation Bar -->
    <nav class="bg-white text-gray-600 shadow-t-lg py-3 flex justify-around items-center fixed bottom-0 inset-x-0 z-40">
        <a href="/" class="flex flex-col items-center hover:text-blue-500 transition duration-200">
            <i class="fas fa-home text-2xl"></i>
            <span class="text-xs font-medium">Home</span>
        </a>
        <a href='/transcript_view' class="flex flex-col items-center hover:text-blue-500 transition duration-200">
            <i class="fas fa-book text-2xl"></i>
            <span class="text-xs font-medium">Notes</span>
        </a>
        <a href='/vc_view' class="flex flex-col items-center hover:text-blue-500 transition duration-200">
            <i class="fas fa-microphone-alt text-2xl"></i>
            <span class="text-xs font-medium">Record</span>
        </a>
        <a href='/setting_view' class="flex flex-col items-center hover:text-blue-500 transition duration-200">
            <i class="fas fa-cog text-2xl"></i>
            <span class="text-xs font-medium">Settings</span>
        </a>
    </nav>
</body>
</html>
