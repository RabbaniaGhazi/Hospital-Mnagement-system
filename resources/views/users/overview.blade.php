<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overview</title>
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

<div class="container">
    <h1>Financial Overview</h1>
    <form method="GET" action="{{ route('users.overview') }}">
        <label for="time_period">Select Time Period:</label>
        <select name="time_period" id="time_period" onchange="this.form.submit()">
            <option value="today" {{ $timePeriod == 'today' ? 'selected' : '' }}>Today</option>
            <option value="last_week" {{ $timePeriod == 'last_week' ? 'selected' : '' }}>Last Week</option>
            <option value="last_month" {{ $timePeriod == 'last_month' ? 'selected' : '' }}>Last Month</option>
            <option value="yearly" {{ $timePeriod == 'yearly' ? 'selected' : '' }}>Yearly</option>
        </select>
    </form>

    <p>Total Patients: {{ $totalPatients }}</p>
    <p>Total Payment Amount: {{ number_format($totalPayment ?? 0, 2) }}</p>
    <p>Hospital Share: {{ number_format($hospitalShare, 2) }}</p>
    <p>Doctor Share: {{ number_format($doctorShare, 2) }}</p>
    <p>Staff Share: {{ number_format($staffShare, 2) }}</p>

    <h2>Doctor Shares</h2>
    <ul>
        @if(isset($doctorShares) && $doctorShares->isNotEmpty())
            @foreach ($doctorShares as $share)
                <li>Doctor: {{ $share->user->name }}, Share: {{ number_format($share->user_share, 2) }}%</li>
            @endforeach
        @else
            <li>No doctor shares available for this period.</li>
        @endif
    </ul>

    <h2>Staff Shares</h2>
    <ul>
        @if(isset($staffShares) && $staffShares->isNotEmpty())
            @foreach ($staffShares as $share)
                <li>Staff: {{ $share->user->name }}, Share: {{ number_format($share->user_share, 2) }}%</li>
            @endforeach
        @else
            <li>No staff shares available for this period.</li>
        @endif
    </ul>
</div>
</body>
</html>