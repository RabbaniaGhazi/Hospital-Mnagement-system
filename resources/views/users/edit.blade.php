<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Users</title>
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
            <!-- Logo -->
            <div class="flex items-center px-6 py-6">
                <div class="bg-indigo-600 p-1 rounded">
                    <i data-lucide="zap" class="h-6 w-6 text-white"></i>
                </div>
                <span class="ml-3 text-lg font-medium">Dashboard</span>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 px-3 py-4">
                <a href="{{ route('dashboard') }}" class="flex items-center px-3 py-2 my-1 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-800 hover:text-white">
                    <i data-lucide="home" class="h-5 w-5 mr-3"></i>
                    Dashboard
                </a>
                <a href="{{ route('users.index') }}" class="flex items-center px-3 py-2 my-1 text-sm font-medium rounded-md bg-gray-800 text-white">
                    <i data-lucide="users" class="h-5 w-5 mr-3"></i>
                    Doctors
                </a>
                <a href="{{ route('patients.index') }}" class="flex items-center px-3 py-2 my-1 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-800 hover:text-white">
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

            <!-- User Profile -->
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
                    <h1 class="text-xl font-medium">Edit User</h1>
                    <button id="sidebarToggle" class="md:hidden p-2 rounded text-gray-400 hover:text-gray-500">
                        <i data-lucide="menu" class="h-6 w-6"></i>
                    </button>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto p-6">
                <div class="max-w-2xl mx-auto bg-white rounded-lg shadow overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200">
                        @if(session('success'))
                            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                                <p>{{ session('success') }}</p>
                            </div>
                        @endif
                    </div>

                    <div class="p-6">
                        <form action="{{ route('users.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select name="role" class="form-control" required>
                                    <option value="staff" {{ $user->role == 'staff' ? 'selected' : '' }}>Staff</option>
                                    <option value="doctor" {{ $user->role == 'doctor' ? 'selected' : '' }}>Doctor</option>
                                </select>
                            </div>
                            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
                        </form>
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