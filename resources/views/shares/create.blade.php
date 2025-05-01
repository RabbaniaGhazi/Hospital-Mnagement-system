<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Define User Share</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
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
            <!-- Header -->
            <header class="bg-white shadow z-10">
                <div class="flex items-center justify-between px-6 py-4">
                    <h1 class="text-xl font-medium">Define User Share</h1>
                    <button id="sidebarToggle" class="md:hidden p-2 rounded text-gray-400 hover:text-gray-500">
                        <i data-lucide="menu" class="h-6 w-6"></i>
                    </button>
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <i data-lucide="search" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 h-4 w-4"></i>
                            <input
                                type="text"
                                placeholder="Search"
                                class="pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            />
                        </div>
                        <button class="p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none">
                            <i data-lucide="bell" class="h-6 w-6"></i>
                        </button>
                        <img src="https://via.placeholder.com/32" alt="User avatar" class="h-8 w-8 rounded-full" />
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto p-6">
                <div class="max-w-2xl mx-auto bg-white rounded-lg shadow overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h2 class="text-lg font-medium">Add New Share</h2>
                    </div>
                    
                    <div class="p-6">
                        @if(session('success'))
                            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                                <p>{{ session('success') }}</p>
                            </div>
                        @endif
                        
                        @if($errors->any())
                            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                                <ul class="list-disc ml-4">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        <form action="{{ route('shares.store') }}" method="POST">
                            @csrf
                            
                            <div class="mb-4">
                                <label for="user_id" class="block text-gray-700 font-medium mb-2">Select User</label>
                                <select name="user_id" id="user_id" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                                    <option value="">Select a user</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                                @error('user_id')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-6">
                                <label for="share" class="block text-gray-700 font-medium mb-2">Share Percentage</label>
                                <input type="text" name="share" id="share" placeholder="Enter share percentage" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                                @error('share')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="flex items-center justify-end">
                                <a href="#" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded mr-2">
                                    Cancel
                                </a>
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    Save Share
                                </button>
                            </div>
                        </form>
                        
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <h3 class="text-lg font-medium mb-4">Edit Existing Shares</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                @foreach ($users as $user)
                                    <a href="{{ route('shares.edit', $user->id) }}" class="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-md">
                                        <i data-lucide="edit" class="h-4 w-4 mr-2"></i>
                                        {{ $user->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Toggle sidebar
        document.getElementById('sidebarToggle').addEventListener('click', function () {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>
</body>
</html>