<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriLink - Retailers</title>
    
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
        .retailer-card {
            transition: all 0.3s ease;
        }
        
        .retailer-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        @include('partials.sidebar')
        
        <!-- Main Content -->
        <main class="flex-1 min-h-screen main-content">
            <!-- Header -->
            <header class="bg-white py-4 px-6 flex items-center justify-between shadow-sm">
                <div class="flex items-center space-x-3">
                    <button id="menu-toggle" class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h2 class="text-xl font-semibold text-gray-700">Registered Retailers</h2>
                </div>
                
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <input type="text" placeholder="Search retailers..." class="px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-green-500 text-sm w-64">
                        <button class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </header>
            
            <!-- Retailers List -->
            <div class="p-6">
                <!-- Stats and Filters Row -->
                <div class="flex flex-wrap items-center justify-between mb-6">
                    <div class="flex space-x-4 mb-4 md:mb-0">
                        <div class="bg-white rounded-lg p-4 shadow-sm">
                            <p class="text-sm text-gray-500">Total Retailers</p>
                            <h3 class="text-xl font-bold text-gray-800">85</h3>
                        </div>
                    </div>
                    
                    <div class="flex space-x-2">
                        <select class="px-3 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-green-500 text-sm">
                            <option>All States</option>
                            <option>Maharashtra</option>
                            <option>Delhi NCR</option>
                            <option>Karnataka</option>
                            <option>Tamil Nadu</option>
                        </select>
                    </div>
                </div>
                
                <!-- Retailers Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Retailer Card 1 -->
                    <div class="bg-white rounded-lg shadow-sm p-5 retailer-card">
                        <div class="flex justify-between items-start">
                            <div class="flex space-x-3">
                                <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-store text-blue-500 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Shanti Stores</h3>
                                    <p class="text-sm text-gray-500">Mumbai, Maharashtra</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="text-gray-400 hover:text-gray-600">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="mt-4 grid grid-cols-2 gap-2 text-sm">
                            <div>
                                <p class="text-gray-500">Retailer ID</p>
                                <p class="font-medium">#RTL-10021</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Joined</p>
                                <p class="font-medium">January 15, 2025</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Type</p>
                                <p class="font-medium">Supermarket</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Orders</p>
                                <p class="font-medium">36 completed</p>
                            </div>
                        </div>
                        
                        <div class="mt-5 flex justify-between items-center">
                            <div class="flex space-x-1">
                                <span class="inline-block w-2 h-2 rounded-full bg-green-500"></span>
                                <p class="text-xs text-gray-500">Currently Active</p>
                            </div>
                            <a href="{{ url('/admin/retailers/profile') }}" class="text-green-500 hover:text-green-700 text-sm font-medium">View Profile</a>
                        </div>
                    </div>
                    
                    <!-- Retailer Card 2 -->
                    <div class="bg-white rounded-lg shadow-sm p-5 retailer-card">
                        <div class="flex justify-between items-start">
                            <div class="flex space-x-3">
                                <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-store text-blue-500 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Fresh Mart</h3>
                                    <p class="text-sm text-gray-500">Bangalore, Karnataka</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="text-gray-400 hover:text-gray-600">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="mt-4 grid grid-cols-2 gap-2 text-sm">
                            <div>
                                <p class="text-gray-500">Retailer ID</p>
                                <p class="font-medium">#RTL-10018</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Joined</p>
                                <p class="font-medium">December 22, 2022</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Type</p>
                                <p class="font-medium">Supermarket</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Orders</p>
                                <p class="font-medium">42 completed</p>
                            </div>
                        </div>
                        
                        <div class="mt-5 flex justify-between items-center">
                            <div class="flex space-x-1">
                                <span class="inline-block w-2 h-2 rounded-full bg-green-500"></span>
                                <p class="text-xs text-gray-500">Currently Active</p>
                            </div>
                            <a href="{{ url('/admin/retailers/profile') }}" class="text-green-500 hover:text-green-700 text-sm font-medium">View Profile</a>
                        </div>
                    </div>
                    
                    <!-- Retailer Card 3 -->
                    <div class="bg-white rounded-lg shadow-sm p-5 retailer-card">
                        <div class="flex justify-between items-start">
                            <div class="flex space-x-3">
                                <div class="w-14 h-14 bg-purple-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-utensils text-purple-500 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Spice Garden Restaurant</h3>
                                    <p class="text-sm text-gray-500">Delhi, NCR</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="text-gray-400 hover:text-gray-600">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="mt-4 grid grid-cols-2 gap-2 text-sm">
                            <div>
                                <p class="text-gray-500">Retailer ID</p>
                                <p class="font-medium">#RTL-10032</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Joined</p>
                                <p class="font-medium">March 10, 2023</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Type</p>
                                <p class="font-medium">Restaurant</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Orders</p>
                                <p class="font-medium">8 completed</p>
                            </div>
                        </div>
                        
                        <div class="mt-5 flex justify-between items-center">
                            <div class="flex space-x-1">
                                <span class="inline-block w-2 h-2 rounded-full bg-gray-400"></span>
                                <p class="text-xs text-gray-500">Last active 1 day ago</p>
                            </div>
                            <a href="{{ url('/admin/retailers/profile') }}" class="text-green-500 hover:text-green-700 text-sm font-medium">View Profile</a>
                        </div>
                    </div>
                    
                    <!-- Retailer Card 4 -->
                    <div class="bg-white rounded-lg shadow-sm p-5 retailer-card">
                        <div class="flex justify-between items-start">
                            <div class="flex space-x-3">
                                <div class="w-14 h-14 bg-yellow-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-boxes text-yellow-500 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Mega Wholesalers</h3>
                                    <p class="text-sm text-gray-500">Chennai, Tamil Nadu</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="text-gray-400 hover:text-gray-600">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="mt-4 grid grid-cols-2 gap-2 text-sm">
                            <div>
                                <p class="text-gray-500">Retailer ID</p>
                                <p class="font-medium">#RTL-10012</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Joined</p>
                                <p class="font-medium">November 5, 2022</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Type</p>
                                <p class="font-medium">Wholesaler</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Orders</p>
                                <p class="font-medium">64 completed</p>
                            </div>
                        </div>
                        
                        <div class="mt-5 flex justify-between items-center">
                            <div class="flex space-x-1">
                                <span class="inline-block w-2 h-2 rounded-full bg-green-500"></span>
                                <p class="text-xs text-gray-500">Currently Active</p>
                            </div>
                            <a href="{{ url('/admin/retailers/profile') }}" class="text-green-500 hover:text-green-700 text-sm font-medium">View Profile</a>
                        </div>
                    </div>
                    
                    <!-- Retailer Card 5 -->
                    <div class="bg-white rounded-lg shadow-sm p-5 retailer-card">
                        <div class="flex justify-between items-start">
                            <div class="flex space-x-3">
                                <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-shopping-basket text-green-500 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Green Grocers</h3>
                                    <p class="text-sm text-gray-500">Pune, Maharashtra</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="text-gray-400 hover:text-gray-600">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="mt-4 grid grid-cols-2 gap-2 text-sm">
                            <div>
                                <p class="text-gray-500">Retailer ID</p>
                                <p class="font-medium">#RTL-10025</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Joined</p>
                                <p class="font-medium">February 2, 2023</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Type</p>
                                <p class="font-medium">Grocery Store</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Orders</p>
                                <p class="font-medium">28 completed</p>
                            </div>
                        </div>
                        
                        <div class="mt-5 flex justify-between items-center">
                            <div class="flex space-x-1">
                                <span class="inline-block w-2 h-2 rounded-full bg-gray-400"></span>
                                <p class="text-xs text-gray-500">Last active 3 hours ago</p>
                            </div>
                            <a href="{{ url('/admin/retailers/profile') }}" class="text-green-500 hover:text-green-700 text-sm font-medium">View Profile</a>
                        </div>
                    </div>
                    
                    <!-- Retailer Card 6 -->
                    <div class="bg-white rounded-lg shadow-sm p-5 retailer-card">
                        <div class="flex justify-between items-start">
                            <div class="flex space-x-3">
                                <div class="w-14 h-14 bg-red-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-utensils text-red-500 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Farm to Table Restaurant</h3>
                                    <p class="text-sm text-gray-500">Hyderabad, Telangana</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="text-gray-400 hover:text-gray-600">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="mt-4 grid grid-cols-2 gap-2 text-sm">
                            <div>
                                <p class="text-gray-500">Retailer ID</p>
                                <p class="font-medium">#RTL-10033</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Joined</p>
                                <p class="font-medium">March 25, 2023</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Type</p>
                                <p class="font-medium">Restaurant</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Orders</p>
                                <p class="font-medium">3 completed</p>
                            </div>
                        </div>
                        
                        <div class="mt-5 flex justify-between items-center">
                            <div class="flex space-x-1">
                                <span class="inline-block w-2 h-2 rounded-full bg-green-500"></span>
                                <p class="text-xs text-gray-500">Currently Active</p>
                            </div>
                            <a href="{{ url('/admin/retailers/profile') }}" class="text-green-500 hover:text-green-700 text-sm font-medium">View Profile</a>
                        </div>
                    </div>
                </div>
                
                <!-- Pagination -->
                <div class="mt-8 flex justify-between items-center">
                    <p class="text-sm text-gray-500">Showing 6 of 85 retailers</p>
                    <div class="flex space-x-1">
                        <button class="px-3 py-1 rounded border text-sm hover:bg-gray-50">Previous</button>
                        <button class="px-3 py-1 rounded border bg-green-500 text-white text-sm">1</button>
                        <button class="px-3 py-1 rounded border text-sm hover:bg-gray-50">2</button>
                        <button class="px-3 py-1 rounded border text-sm hover:bg-gray-50">3</button>
                        <button class="px-3 py-1 rounded border text-sm hover:bg-gray-50">...</button>
                        <button class="px-3 py-1 rounded border text-sm hover:bg-gray-50">15</button>
                        <button class="px-3 py-1 rounded border text-sm hover:bg-gray-50">Next</button>
                    </div>
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