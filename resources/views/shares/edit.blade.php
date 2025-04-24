<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share</title>
    @vite('resources/css/app.css')
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
                    <h1 class="text-xl font-medium">Edit Share for {{ $share->user->name }}</h1>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-6">
                <div class="max-w-2xl mx-auto bg-white rounded-lg shadow overflow-hidden">
                    <div class="p-6">
                        @if(session('success'))
                            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4">{{ session('success') }}</div>
                        @endif
                        @if($errors->any())
                            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4">
                                <ul class="list-disc ml-4">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('shares.update', $share->user_id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="share" class="block text-gray-700 font-medium mb-2">Share Percentage</label>
                                <input type="number" name="share" id="share" value="{{ $share->share }}" placeholder="Enter share percentage" class="w-full px-3 py-2 border border-gray-300 rounded" required>
                            </div>
                            <div class="flex items-center justify-end">
                                <a href="{{ route('shares.create') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded mr-2">Cancel</a>
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Share</button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>