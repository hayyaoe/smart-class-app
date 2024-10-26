<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartClass AI Summarizer </title>
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
                <h2 class="text-xl font-semibold"> AI Summarizer </h2>
            </div>
        </div>
    </header>

    <!-- Summary Section -->
    <main class="flex-grow flex flex-col px-6 mt-44 mb-32 justify-start items-center">
        <!-- Button Row -->
        <div class="flex flex-row justify-center w-full mb-6 space-x-2">
            <a href="#" id="btn-summary" class="blue-bg text-center text-white text-md py-3 px-6 rounded-full w-full max-w-xs hover:bg-blue-700 transition duration-200 shadow-md">
                Summary
            </a>
            <a href="#" id="btn-mindmap" class="bg-white text-center text-blue-600 text-md py-3 px-6 rounded-full w-full max-w-xs hover:bg-blue-700 transition duration-200 shadow-md">
                Mind Map
            </a>
        </div>
        
        <div class="bg-white max-w-md flex flex-col items-center rounded-2xl shadow-lg">
            <div id="summary-content" class="overflow-y-auto h-full w-full p-8">
                <p class="text-2xl mb-2 font-semibold">Pythagorean Theorem</p>
                <p class="text-black text-justify mb-4">
                    - Setiap pertanyaan yang kalian ajukan dapat membantu kalian untuk lebih pintar <br>
                    - Setiap kesalahan yang kalian buat yang sedang kalian bentuk. <br>
                    - Belajar bukan hanya tentang mendapatkan jawaban yang benar. <br>
                    - Ini tentang perjalanan memahami, mengeksplorasi, dan tumbuh. <br>
                    - Rafi dan kawan-kawan adalah teman-nya Kevin Christian dan kawan-kawan. <br>
                    - Setiap kesalahan yang kalian buat yang sedang kalian bentuk. <br>
                    - Belajar bukan hanya tentang mendapatkan jawaban yang benar. <br>
                    - Ini tentang perjalanan memahami, mengeksplorasi, dan tumbuh. <br>
                </p>
            </div>

            <div id="mindmap-content" class="h-full w-full flex justify-center items-center hidden"> <!-- Center the image -->
                <img src="/images/MindMapPlaceholder.jpg" class="h-96 w-auto object-cover rounded-2xl">
            </div>

            <!-- Save as PDF Button -->
            <a href="" id="save-btn" class="fixed bottom-20 left-1/2 transform -translate-x-1/2 blue-bg text-center text-white text-lg font-semibold py-3 px-6 rounded-full mt-4 w-full max-w-xs hover:bg-blue-700 transition duration-200 shadow-md">
                Save as PDF
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const summaryBtn = document.getElementById("btn-summary");
            const mindMapBtn = document.getElementById("btn-mindmap");
            const saveBtn = document.getElementById("save-btn");
            const summaryContent = document.getElementById("summary-content");
            const mindmapContent = document.getElementById("mindmap-content");

            summaryBtn.addEventListener("click", function() {
                if (summaryBtn.classList.contains("blue-bg")) {
                    summaryBtn.classList.remove("blue-bg", "text-white");
                    summaryBtn.classList.add("bg-white", "text-blue-600");
                    mindMapBtn.classList.remove("bg-white", "text-blue-600");
                    mindMapBtn.classList.add("blue-bg", "text-white");
                    saveBtn.textContent = "Save as image";
                    saveBtn.href = "";
                    summaryContent.classList.add("hidden");
                    mindmapContent.classList.remove("hidden");
                } else {
                    summaryBtn.classList.remove("bg-white", "text-blue-600");
                    summaryBtn.classList.add("blue-bg", "text-white");
                    mindMapBtn.classList.remove("blue-bg", "text-white");
                    mindMapBtn.classList.add("bg-white", "text-blue-600");
                    saveBtn.textContent = "Save as PDF";
                    saveBtn.href = "";
                    summaryContent.classList.remove("hidden");
                    mindmapContent.classList.add("hidden");
                }
            });

            mindMapBtn.addEventListener("click", function() {
                if (mindMapBtn.classList.contains("blue-bg")) {
                    mindMapBtn.classList.remove("blue-bg", "text-white");
                    mindMapBtn.classList.add("bg-white", "text-blue-600");
                    summaryBtn.classList.remove("bg-white", "text-blue-600");
                    summaryBtn.classList.add("blue-bg", "text-white");
                    saveBtn.textContent = "Save as PDF";
                    saveBtn.href = "";
                    summaryContent.classList.remove("hidden");
                    mindmapContent.classList.add("hidden");
                } else {
                    mindMapBtn.classList.remove("bg-white", "text-blue-600");
                    mindMapBtn.classList.add("blue-bg", "text-white");
                    summaryBtn.classList.remove("blue-bg", "text-white");
                    summaryBtn.classList.add("bg-white", "text-blue-600");
                    saveBtn.textContent = "Save as image";
                    saveBtn.href = "";
                    summaryContent.classList.add("hidden");
                    mindmapContent.classList.remove("hidden");
                }
            });
        });
    </script>

</body>
</html>
