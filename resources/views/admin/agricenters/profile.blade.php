<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriLink - Agri Center Profile</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        
        /* Sidebar styles */
        .sidebar {
            width: 280px;
            background: #10B981;
            height: 100vh;
            transition: all 0.3s ease;
            position: fixed;
            left: 0;
            top: 0;
            overflow-y: auto;
        }
        
        .main-content {
            margin-left: 280px;
        }
        
        .sidebar-link {
            color: rgba(255, 255, 255, 0.8);
            transition: all 0.2s ease;
            border-left: 3px solid transparent;
        }
        
        .sidebar-link:hover, .sidebar-link.active {
            color: white;
            background: rgba(255, 255, 255, 0.1);
            border-left: 3px solid white;
        }
        
        /* Custom scrollbar */
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #10B981;
            border-radius: 3px;
        }
        
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #0D9488;
        }
        
        /* Card hover effect */
        .stats-card {
            transition: all 0.3s ease;
        }
        
        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Include Sidebar -->
        @include('partials.sidebar')
        
        <!-- Main Content -->
        <main class="flex-1 min-h-screen main-content">
            <!-- Header -->
            <header class="bg-white py-4 px-6 flex items-center justify-between shadow-sm">
                <div class="flex items-center space-x-3">
                    <button id="menu-toggle" class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h2 class="text-xl font-semibold text-gray-700">Agri Center Profile</h2>
                </div>
                
                <div class="flex items-center space-x-4">
                    <a href="{{ url('/admin/agricenters') }}" class="flex items-center text-sm text-gray-600 hover:text-gray-900">
                        <i class="fas fa-arrow-left mr-2"></i> Back to Agri Centers
                    </a>
                </div>
            </header>
            
            <!-- Profile Content -->
            <div class="p-6">
                <!-- Center Details Card -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <div class="flex flex-col md:flex-row">
                        <div class="md:w-1/4 mb-4 md:mb-0 flex flex-col items-center justify-center">
                            <div class="w-32 h-32 bg-green-100 rounded-full flex items-center justify-center mb-3">
                                <i class="fas fa-building text-green-500 text-4xl"></i>
                            </div>
                            <h3 class="font-semibold text-gray-800 text-xl">Punjab Agricultural Center</h3>
                            <p class="text-gray-500">Amritsar, Punjab</p>
                            <div class="flex items-center mt-2">
                                <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Government</span>
                            </div>
                        </div>
                        
                        <div class="md:w-3/4 md:pl-8 md:border-l border-gray-200">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                <div>
                                    <p class="text-gray-500 text-sm">Center ID</p>
                                    <p class="font-medium">#AGC-10001</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Established Date</p>
                                    <p class="font-medium">April 10, 2025</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Email</p>
                                    <p class="font-medium">contact@punjabagricenter.org</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Phone</p>
                                    <p class="font-medium">+91 8899776655</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Type</p>
                                    <p class="font-medium">Research Center</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Website</p>
                                    <p class="font-medium">www.punjabagricenter.org</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Address</p>
                                    <p class="font-medium">123, Agricultural Zone, Amritsar, Punjab - 143001</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Status</p>
                                    <p class="font-medium text-green-600">Active</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Operating Hours</p>
                                    <p class="font-medium">9:00 AM - 5:00 PM</p>
                                </div>
                            </div>
                            
                            <div class="mt-6">
                                <h4 class="text-md font-semibold text-gray-700 mb-2">About</h4>
                                <p class="text-gray-600">The Punjab Agricultural Center is a premier agricultural research institution dedicated to enhancing farming practices in the region. Established with a mission to support local farmers with cutting-edge agricultural technology and knowledge, the center conducts research on crop improvement, soil health, pest management, and sustainable farming practices.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                    <div class="bg-white rounded-lg shadow-sm p-5 stats-card">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Farmers Registered</p>
                                <h3 class="text-2xl font-bold text-gray-800">1,245</h3>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-green-500">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-sm p-5 stats-card">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Training Programs</p>
                                <h3 class="text-2xl font-bold text-gray-800">36</h3>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-500">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-sm p-5 stats-card">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Research Projects</p>
                                <h3 class="text-2xl font-bold text-gray-800">28</h3>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center text-purple-500">
                                <i class="fas fa-flask"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-sm p-5 stats-card">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Staff Members</p>
                                <h3 class="text-2xl font-bold text-gray-800">78</h3>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center text-orange-500">
                                <i class="fas fa-user-tie"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Services Section -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">Services Offered</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="p-4 border rounded-lg">
                            <div class="flex items-center mb-3">
                                <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-500 mr-3">
                                    <i class="fas fa-seedling"></i>
                                </div>
                                <h4 class="font-medium text-gray-800">Soil Testing</h4>
                            </div>
                            <p class="text-sm text-gray-600">Comprehensive soil analysis service to determine nutrient content, pH levels, and recommend suitable crops.</p>
                        </div>
                        
                        <div class="p-4 border rounded-lg">
                            <div class="flex items-center mb-3">
                                <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-500 mr-3">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <h4 class="font-medium text-gray-800">Farmer Training</h4>
                            </div>
                            <p class="text-sm text-gray-600">Regular workshops and training sessions on modern farming techniques, crop management, and sustainable practices.</p>
                        </div>
                        
                        <div class="p-4 border rounded-lg">
                            <div class="flex items-center mb-3">
                                <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center text-purple-500 mr-3">
                                    <i class="fas fa-microscope"></i>
                                </div>
                                <h4 class="font-medium text-gray-800">Research & Development</h4>
                            </div>
                            <p class="text-sm text-gray-600">Cutting-edge research on crop varieties, pest resistance, and yield improvement for local agricultural conditions.</p>
                        </div>
                        
                        <div class="p-4 border rounded-lg">
                            <div class="flex items-center mb-3">
                                <div class="w-10 h-10 rounded-full bg-yellow-100 flex items-center justify-center text-yellow-500 mr-3">
                                    <i class="fas fa-leaf"></i>
                                </div>
                                <h4 class="font-medium text-gray-800">Seed Distribution</h4>
                            </div>
                            <p class="text-sm text-gray-600">Distribution of high-quality, certified seeds to farmers at subsidized rates to promote better crop yield.</p>
                        </div>
                        
                        <div class="p-4 border rounded-lg">
                            <div class="flex items-center mb-3">
                                <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center text-red-500 mr-3">
                                    <i class="fas fa-bug"></i>
                                </div>
                                <h4 class="font-medium text-gray-800">Pest Management</h4>
                            </div>
                            <p class="text-sm text-gray-600">Advisory services on pest identification, prevention, and integrated pest management techniques.</p>
                        </div>
                        
                        <div class="p-4 border rounded-lg">
                            <div class="flex items-center mb-3">
                                <div class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-500 mr-3">
                                    <i class="fas fa-certificate"></i>
                                </div>
                                <h4 class="font-medium text-gray-800">Organic Certification</h4>
                            </div>
                            <p class="text-sm text-gray-600">Assistance with organic certification process, documentation, and compliance with organic farming standards.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Upcoming Events -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">Upcoming Events</h3>
                    
                    <ul class="space-y-4">
                        <li class="border-b pb-4">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h4 class="font-medium text-gray-800">Annual Farmer's Conference 2025</h4>
                                    <p class="text-sm text-gray-600 mt-1">A two-day event focusing on sustainable farming practices and new technologies in agriculture.</p>
                                    <div class="flex items-center mt-2 text-sm text-gray-500">
                                        <i class="far fa-calendar-alt mr-2"></i> May 15-16, 2025
                                        <i class="far fa-clock ml-4 mr-2"></i> 9:00 AM - 5:00 PM
                                    </div>
                                </div>
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs">Upcoming</span>
                            </div>
                        </li>
                        
                        <li class="border-b pb-4">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h4 class="font-medium text-gray-800">Workshop on Organic Farming</h4>
                                    <p class="text-sm text-gray-600 mt-1">Hands-on workshop covering organic farming methods, certification, and market opportunities.</p>
                                    <div class="flex items-center mt-2 text-sm text-gray-500">
                                        <i class="far fa-calendar-alt mr-2"></i> April 22, 2025
                                        <i class="far fa-clock ml-4 mr-2"></i> 10:00 AM - 3:00 PM
                                    </div>
                                </div>
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs">Upcoming</span>
                            </div>
                        </li>
                        
                        <li>
                            <div class="flex justify-between items-start">
                                <div>
                                    <h4 class="font-medium text-gray-800">Soil Health Management Seminar</h4>
                                    <p class="text-sm text-gray-600 mt-1">Expert-led seminar on maintaining soil health, nutrient management, and soil testing.</p>
                                    <div class="flex items-center mt-2 text-sm text-gray-500">
                                        <i class="far fa-calendar-alt mr-2"></i> April 30, 2025
                                        <i class="far fa-clock ml-4 mr-2"></i> 11:00 AM - 2:00 PM
                                    </div>
                                </div>
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs">Upcoming</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </div>
    
    <script>
        // Toggle sidebar
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const sidebar = document.querySelector('.sidebar');
            const mainContent = document.querySelector('.main-content');
            
            sidebar.classList.toggle('-translate-x-full');
            
            // Toggle main content margin when sidebar is hidden/shown
            if (sidebar.classList.contains('-translate-x-full')) {
                mainContent.style.marginLeft = '0';
            } else {
                mainContent.style.marginLeft = '280px';
            }
        });
    </script>
</body>
</html> 