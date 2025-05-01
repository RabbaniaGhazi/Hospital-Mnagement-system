<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
       
        <div class="w-64 bg-gray-900 text-white flex flex-col transition-transform transform md:translate-x-0" id="sidebar">
          
            <div class="flex items-center px-6 py-6">
                <div class="bg-indigo-600 p-1 rounded">
                    <i data-lucide="zap" class="h-6 w-6 text-white"></i>
                </div>
                <span class="ml-3 text-lg font-medium">Dashboard</span>
            </div>

          
            <nav class="flex-1 px-3 py-4">
                <a href="{{ route('dashboard') }}" class="flex items-center px-3 py-2 my-1 text-sm font-medium rounded-md bg-gray-800 text-white">
                    <i data-lucide="home" class="h-5 w-5 mr-3"></i>
                    Dashboard
                </a>
                <a href="{{ route('users.index') }}" class="flex items-center px-3 py-2 my-1 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-800 hover:text-white">
                    <i data-lucide="users" class="h-5 w-5 mr-3"></i>
                    Users
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

      
        <div class="flex-1 flex flex-col overflow-hidden">
          
            <header class="bg-white shadow z-10">
                <div class="flex items-center justify-between px-6 py-4">
                    <h1 class="text-xl font-medium">Dashboard</h1>
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

            
            <main class="flex-1 overflow-y-auto p-6">
                <h2 class="text-lg font-medium mb-4">Overview</h2>

               
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                   
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex items-center">
                            <div class="bg-blue-100 p-3 rounded-lg">
                                <i data-lucide="user" class="h-6 w-6 text-blue-600"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-500">Patients Today</p>
                                <div class="flex items-baseline">
                                    <p class="text-2xl font-semibold text-gray-900">{{ $patientsToday }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                 
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex items-center">
                            <div class="bg-blue-100 p-3 rounded-lg">
                                <i data-lucide="user" class="h-6 w-6 text-blue-600"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-500">Patients This Month</p>
                                <div class="flex items-baseline">
                                    <p class="text-2xl font-semibold text-gray-900">{{ $patientsThisMonth }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                  
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex items-center">
                            <div class="bg-blue-100 p-3 rounded-lg">
                                <i data-lucide="user" class="h-6 w-6 text-blue-600"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-500">Patients This Year</p>
                                <div class="flex items-baseline">
                                    <p class="text-2xl font-semibold text-gray-900">{{ $patientsThisYear }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex items-center">
                            <div class="bg-indigo-100 p-3 rounded-lg">
                                <i data-lucide="users" class="h-6 w-6 text-indigo-600"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-500">Total Doctors</p>
                                <div class="flex items-baseline">
                                    <p class="text-2xl font-semibold text-gray-900">20</p>
                                    <p class="ml-2 text-sm font-medium text-green-600"></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex items-center">
                            <div class="bg-green-100 p-3 rounded-lg">
                                <i data-lucide="dollar-sign" class="h-6 w-6 text-green-600"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-500">Revenue</p>
                                <div class="flex items-baseline">
                                    <p class="text-2xl font-semibold text-gray-900"></p>
                                    <p class="ml-2 text-sm font-medium text-green-600"></p>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex items-center">
                            <div class="bg-yellow-100 p-3 rounded-lg">
                                <i data-lucide="folder" class="h-6 w-6 text-yellow-600"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-500">Projects</p>
                                <div class="flex items-baseline">
                                    <p class="text-2xl font-semibold text-gray-900"></p>
                                    <p class="ml-2 text-sm font-medium text-green-600"></p>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex items-center">
                            <div class="bg-red-100 p-3 rounded-lg">
                                <i data-lucide="check-circle" class="h-6 w-6 text-red-600"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-500">Tasks Complete</p>
                                <div class="flex items-baseline">
                                    <p class="text-2xl font-semibold text-gray-900"></p>
                                    <p class="ml-2 text-sm font-medium text-green-600"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

           
                <div>
                    <h2 class="text-lg font-medium mb-4">Recent Activity</h2>
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="divide-y divide-gray-200">
                          
                            <div class="px-6 py-4 flex justify-between items-center">
                                <div class="flex items-center">
                                    <span class="text-blue-600 font-medium">New user signup</span>
                                </div>
                                <div class="text-sm text-green-600">Just now</div>
                            </div>
                            <div class="px-6 py-2 flex items-center text-sm text-gray-600">
                                <i data-lucide="user" class="h-4 w-4 mr-2"></i>
                              
                            </div>

                          
                            <div class="px-6 py-4 flex justify-between items-center">
                                <div class="flex items-center">
                                    <span class="text-blue-600 font-medium">Project created</span>
                                </div>
                                <div class="text-sm text-green-600">10 minutes ago</div>
                            </div>
                            <div class="px-6 py-2 flex items-center text-sm text-gray-600">
                                <i data-lucide="folder" class="h-4 w-4 mr-2"></i>
                                Website Redesign
                            </div>

                         
                            <div class="px-6 py-4 flex justify-between items-center">
                                <div class="flex items-center">
                                    <span class="text-blue-600 font-medium">Task completed</span>
                                </div>
                                <div class="text-sm text-green-600">2 hour ago</div>
                            </div>
                            <div class="px-6 py-2 flex items-center text-sm text-gray-600">
                                <i data-lucide="file" class="h-4 w-4 mr-2"></i>
                                Update users documentation
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
      
        lucide.createIcons();

     
        document.getElementById('sidebarToggle').addEventListener('click', function () {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>
</body>
</html>