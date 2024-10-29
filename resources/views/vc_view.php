<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartClass Voice Recording</title>
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
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #282c34;
            margin: 0;
        }
        .blue-bg{
            background-color: #1152FD;
        }
        /* body {
            
        } */

        .wave-container {
            display: flex;
            align-items: flex-center;
            height: 40px; /* Adjust as needed */
        }

        .wave-bar {
            width: 20px; /* Width of each bar */
            background-color: #1152FD; /* Color of the bars */
            margin: 0 4px; /* Space between bars */
            animation: wave 1s infinite alternate;
            transform-origin: center; /* Set the transform origin to the center */
        }

        /* Create the wave animation */
        @keyframes wave {
            0% {
                transform: scaleY(1.0); /* Minimum scale */
            }
            100% {
                transform: scaleY(0.5); /* Maximum scale */
            }
        }

        /* Add a delay for each bar to create a wave effect */
        .wave-bar:nth-child(1) { animation-delay: 0s; }
        .wave-bar:nth-child(2) { animation-delay: 0.2s; }
        .wave-bar:nth-child(3) { animation-delay: 0.3s; }
        .wave-bar:nth-child(4) { animation-delay: 0.5s; }
        .wave-bar:nth-child(5) { animation-delay: 0.6s; }
        .wave-bar:nth-child(6) { animation-delay: 0.8s; }
        .wave-bar:nth-child(7) { animation-delay: 0.9s; }
        .wave-bar:nth-child(8) { animation-delay: 1.0s; }
        .wave-bar:nth-child(9) { animation-delay: 1.1s; }
        .wave-bar:nth-child(10) { animation-delay: 1.3s; }
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
                <h2 class="text-xl font-semibold"> Voice Recording </h2>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow flex flex-col items-center justify-center mt-12">
        <!-- Voice Recording Section -->
        <div class="p-8 w-11/12 max-w-md text-center">


            <!-- Mic Icon for Visual Above Start Recording Button in a separate container -->
            <div class="flex flex-col items-center mb-6">
                <div class="bg-gradient-to-r from-blue-600 to-blue-500 text-white rounded-full p-8 inline-block shadow-md">
                    <i class="fas fa-microphone text-5xl"></i>
                </div>

            </div>

            <!-- Start/Stop Recording Button -->
            <button id="recordButton" class="bg-blue-600 text-white text-lg font-semibold py-3 px-6 rounded-full hover:bg-blue-700 transition duration-200 shadow-md mb-6">
                Start Recording
            </button>
            <button id="stopButton" class="text-red-500 hover:text-red-700 transition duration-200 text-lg font-semibold py-3 px-6 rounded-full shadow-md mb-6 hidden">
                Stop Recording
            </button>

            <!-- Sound Wave Simulation -->
            <div class="w-full h-4 bg-gray-200 rounded-full overflow-hidden mb-8 shadow-inner">
                <div id="wave" class="h-4 bg-gradient-to-r from-blue-600 to-blue-400 w-3/4 hidden"></div>
            </div>

            <!-- Playback -->
            <audio id="audioPlayback" controls class="mt-4 hidden"></audio>
        </div>
    </main>

    <!-- Bottom Navigation Bar -->
    <nav class="bg-white text-gray-600 shadow-t-lg py-3 flex justify-around items-center fixed bottom-0 inset-x-0">
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

    <!-- JavaScript for Audio Recording -->
    <script>
        let isRecording = false;
        let mediaRecorder;
        let audioChunks = [];

        const recordButton = document.getElementById("recordButton");
        const stopButton = document.getElementById("stopButton");
        const audioPlayback = document.getElementById("audioPlayback");
        const wave = document.getElementById("wave");

        // Load from local storage and play if available
        window.onload = function() {
            const savedAudio = localStorage.getItem("savedRecording");
            if (savedAudio) {
                const audioBlob = b64toBlob(savedAudio, "audio/wav");
                const audioUrl = URL.createObjectURL(audioBlob);
                audioPlayback.src = audioUrl;
                audioPlayback.classList.remove("hidden");
            }
        }

        recordButton.addEventListener("click", async () => {
            if (!isRecording) {
                if (!navigator.mediaDevices) {
                    alert("Audio recording not supported in this browser.");
                    return;
                }
                const stream = await navigator.mediaDevices.getUserMedia({
                    audio: true
                });
                mediaRecorder = new MediaRecorder(stream);
                mediaRecorder.start();
                audioChunks = [];
                mediaRecorder.addEventListener("dataavailable", (event) => {
                    audioChunks.push(event.data);
                });
                mediaRecorder.addEventListener("stop", () => {
                    const audioBlob = new Blob(audioChunks, {
                        type: "audio/wav"
                    });
                    const audioUrl = URL.createObjectURL(audioBlob);
                    audioPlayback.src = audioUrl;
                    audioPlayback.classList.remove("hidden");
                    storeRecording(audioBlob); // Store in local storage
                });
                recordButton.classList.add("hidden");
                stopButton.classList.remove("hidden");
                wave.classList.remove("hidden");
                isRecording = true;
            }
        });

        stopButton.addEventListener("click", () => {
            mediaRecorder.stop();
            recordButton.classList.remove("hidden");
            stopButton.classList.add("hidden");
            wave.classList.add("hidden");
            isRecording = false;
        });

        // Function to store audio as base64 in local storage
        function storeRecording(blob) {
            const reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function() {
                const base64data = reader.result.split(",")[1]; // Get base64 string only
                localStorage.setItem("savedRecording", base64data);
            }
        }

        // Function to convert Base64 back to Blob
        function b64toBlob(b64Data, contentType = '', sliceSize = 512) {
            const byteCharacters = atob(b64Data);
            const byteArrays = [];

            for (let offset = 0; offset < byteCharacters.length; offset += sliceSize) {
                const slice = byteCharacters.slice(offset, offset + sliceSize);
                const byteNumbers = new Array(slice.length);
                for (let i = 0; i < slice.length; i++) {
                    byteNumbers[i] = slice.charCodeAt(i);
                }
                const byteArray = new Uint8Array(byteNumbers);
                byteArrays.push(byteArray);
            }

            return new Blob(byteArrays, {
                type: contentType
            });
        }
    </script>
</body>
</html>
