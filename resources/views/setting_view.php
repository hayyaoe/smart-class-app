<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartClass Settings</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

    <!-- Header -->
    <header class="bg-gradient-to-r from-blue-600 to-blue-500 text-white py-4 text-center shadow-md">
        <h1 class="text-2xl font-extrabold tracking-wide">Settings</h1>
    </header>

    <!-- Settings Section -->
    <main class="flex-grow mt-3 mb-12 flex flex-col items-center py-6">
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

                <!-- Save Changes Button -->
    <div class="flex justify-center">
        <button class="bg-blue-600 text-white text-lg font-semibold py-3 px-6 rounded-full mt-4 hover:bg-blue-700 transition duration-200 shadow-md">
          Save Changes
        </button>
    </div>


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
