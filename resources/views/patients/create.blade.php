<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Patient</title>
    @vite('resources/css/app.css') <!-- Using Vite for asset management -->
    <script src="https://cdn.jsdelivr.net/npm/lucide@latest/dist/umd/lucide.min.js"></script> <!-- Lucide for icons -->
    <style>
        body {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-900 text-white flex flex-col transition-transform transform md:translate-x-0" id="sidebar">
            <div class="flex items-center px-6 py-6">
                <div class="bg-indigo-600 p-1 rounded">
                    <i data-lucide="zap" class="h-6 w-6 text-white"></i>
                </div>
                <span class="ml-3 text-lg font-medium">Dashboard</span>
            </div>

            <nav class="flex-1 px-3 py-4">
                <a href="{{ route('dashboard') }}" class="flex items-center px-3 py-2 my-1 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-800 hover:text-white">
                    <i data-lucide="home" class="h-5 w-5 mr-3"></i>
                    Dashboard
                </a>
                <a href="{{ route('users.index') }}" class="flex items-center px-3 py-2 my-1 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-800 hover:text-white">
                    <i data-lucide="users" class="h-5 w-5 mr-3"></i>
                    Doctors
                </a>
                <a href="{{ route('patients.index') }}" class="flex items-center px-3 py-2 my-1 text-sm font-medium rounded-md bg-gray-800 text-white">
                    <i data-lucide="user" class="h-5 w-5 mr-3"></i>
                    Patients
                </a>
                <a href="#" class="flex items-center px-3 py-2 my-1 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-800 hover:text-white">
                    <i data-lucide="folder" class="h-5 w-5 mr-3"></i>
                    Projects
                </a>
                <a href="#" class="flex items-center px-3 py-2 my-1 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-800 hover:text-white">
                    <i data-lucide="calendar" class="h-5 w-5 mr-3"></i>
                    Calendar
                </a>
                <a href="#" class="flex items-center px-3 py-2 my-1 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-800 hover:text-white">
                    <i data-lucide="bar-chart-2" class="h-5 w-5 mr-3"></i>
                    Reports
                </a>
            </nav>

            <div class="border-t border-gray-800 p-4 flex items-center">
                <img src="https://via.placeholder.com/40" alt="User avatar" class="h-10 w-10 rounded-full">
                <div class="ml-3">
                    <p class="text-sm font-medium text-white">{{ Auth::user()->name }}</p>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-xs text-gray-400 hover:text-white">Logout</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="bg-white shadow z-10">
                <div class="flex items-center justify-between px-6 py-4">
                    <h1 class="text-xl font-medium">Add New Patient</h1>
                    <button id="sidebarToggle" class="md:hidden p-2 rounded text-gray-400 hover:text-gray-500">
                        <i data-lucide="menu" class="h-6 w-6"></i>
                    </button>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-6">
                <div class="max-w-2xl mx-auto bg-white rounded-lg shadow overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200">
                        @if ($errors->any())
                            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                                <p class="font-bold">Whoops! Something went wrong.</p>
                                <ul class="list-disc pl-5">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                    <div class="p-6">
                        <form action="{{ route('patients.store') }}" method="POST">
                            @csrf
                            <div class="space-y-4">
                                <div>
                                    <label for="name" class="block font-medium text-gray-700">Name:</label>
                                    <input type="text" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                </div>

                                <div>
                                    <label for="age" class="block font-medium text-gray-700">Age:</label>
                                    <input type="number" name="age" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                </div>

                                <div>
                                    <label for="address" class="block font-medium text-gray-700">Address:</label>
                                    <input type="text" name="address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                </div>

                                <div>
                                    <label for="fee" class="block font-medium text-gray-700">Fee:</label>
                                    <input type="number" name="fee" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                </div>

                                <div>
                                    <label for="phone_number" class="block font-medium text-gray-700">Phone Number:</label>
                                    <input type="text" name="phone_number" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                </div>

                                <div>
                                    <label for="whatsapp_number" class="block font-medium text-gray-700">WhatsApp Number:</label>
                                    <input type="text" name="whatsapp_number" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                </div>

                                <div>
                                    <label for="user_id" class="block font-medium text-gray-700">Select Doctor:</label>
                                    <select name="user_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                        <option value="">Select a Doctor</option>
                                        @foreach($doctors as $doctor)
                                            <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mt-6">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Submit</button>
                                <a href="{{ route('patients.index') }}" class="ml-4 bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Back to List</a>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Toggle sidebar functionality
        document.getElementById('sidebarToggle').addEventListener('click', function () {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>
</body>
<html>