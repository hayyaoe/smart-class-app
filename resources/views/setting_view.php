<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartClass Settings</title>
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
<body class="bg-gray-100 flex flex-col min-h-screen">

    <!-- Header -->
    <!-- Header -->
    <header class="text-white text-center relative">
        <div class="blue-bg pt-12 pb-12 shadow-md rounded-b-3xl fixed top-0 left-0 w-full z-10"> <!-- Changed 'relative' to 'fixed' -->
            <h1 class="text-4xl font-extrabold tracking-wide">smartclass</h1>
        </div>
        
        <!-- Transcript Button -->
        <div class="fixed top-20 left-1/2 transform -translate-x-1/2 translate-y-1/2 w-80 z-50">
            <div class="bg-white text-blue-600 font-semibold text-lg px-6 py-3 rounded-full shadow-lg w-full">
                <h2 class="text-xl font-semibold"> Settings </h2>
            </div>
        </div>
    </header>

    <!-- Settings Section -->
    <main class="flex-grow flex flex-col items-center mt-28 py-6">
        <div class="bg-white w-11/12 max-w-lg rounded-2xl shadow-lg p-6">
            <h2 class="text-xl font-bold mb-4">Profile Settings</h2>
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your username">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your email">
            </div>

            <h2 class="text-xl font-bold mb-4">Notification Preferences</h2>
            <div class="mb-4 flex items-center">
                <input type="checkbox" id="email-notifications" class="h-5 w-5 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
                <label for="email-notifications" class="ml-2 text-sm text-gray-700">Email Notifications</label>
            </div>
            <div class="mb-4 flex items-center">
                <input type="checkbox" id="sms-notifications" class="h-5 w-5 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
                <label for="sms-notifications" class="ml-2 text-sm text-gray-700">SMS Notifications</label>
            </div>

            <h2 class="text-xl font-bold mb-4">Theme Selection</h2>
            <div class="mb-4">
                <label for="theme" class="block text-sm font-medium text-gray-700">Select Theme</label>
                <select id="theme" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                    <option value="light">Light</option>
                    <option value="dark">Dark</option>
                </select>
            </div>

            <button class="bg-blue-600 text-white text-lg font-semibold py-3 px-6 rounded-full mt-4 hover:bg-blue-700 transition duration-200 shadow-md">
                Save Changes
            </button>

            <button class="mt-4 w-full text-center text-red-600 font-semibold hover:underline">
                <i class="fas fa-sign-out-alt mr-2"></i> Log Out
            </button>
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

</body>
</html>
