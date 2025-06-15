<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriLink - Admin Dashboard</title>
    
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
        
        /* Card animation */
        .dashboard-card {
            transition: all 0.3s ease;
        }
        
        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
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
                    <h2 class="text-xl font-semibold text-gray-700">Dashboard</h2>
                </div>
                
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
                            <i class="fas fa-bell"></i>
                            <span class="absolute -top-1 -right-1 bg-red-500 text-white rounded-full w-4 h-4 flex items-center justify-center text-xs">3</span>
                        </button>
                    </div>
                    
                    <div class="flex items-center space-x-2">
                        <div class="w-10 h-10 rounded-full bg-green-500 flex items-center justify-center text-white font-semibold">
                            A
                        </div>
                        <div class="hidden md:block">
                            <p class="text-sm font-medium text-gray-700">Admin User</p>
                            <p class="text-xs text-gray-500">admin@example.com</p>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- Dashboard Content -->
            <div class="p-6">
                <!-- Overview Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-lg shadow-sm p-6 dashboard-card">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Total Farmers</p>
                                <h3 class="text-2xl font-bold text-gray-800">124</h3>
                                <p class="text-xs text-green-500 mt-1">
                                    <i class="fas fa-arrow-up"></i> 12% increase
                                </p>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-green-500">
                                <i class="fas fa-tractor text-xl"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-sm p-6 dashboard-card">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Total Retailers</p>
                                <h3 class="text-2xl font-bold text-gray-800">85</h3>
                                <p class="text-xs text-green-500 mt-1">
                                    <i class="fas fa-arrow-up"></i> 8% increase
                                </p>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-500">
                                <i class="fas fa-store text-xl"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-sm p-6 dashboard-card">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Total Products</p>
                                <h3 class="text-2xl font-bold text-gray-800">327</h3>
                                <p class="text-xs text-green-500 mt-1">
                                    <i class="fas fa-arrow-up"></i> 15% increase
                                </p>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center text-yellow-500">
                                <i class="fas fa-carrot text-xl"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-sm p-6 dashboard-card">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Agri Centers</p>
                                <h3 class="text-2xl font-bold text-gray-800">42</h3>
                                <p class="text-xs text-green-500 mt-1">
                                    <i class="fas fa-arrow-up"></i> 10% increase
                                </p>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-green-500">
                                <i class="fas fa-warehouse text-xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Live Bids and Activities Section -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Live Bids -->
                    <div class="lg:col-span-2 bg-white rounded-lg shadow-sm p-6 dashboard-card">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-semibold text-gray-700">Live Bids</h3>
                            <select class="text-sm border rounded px-2 py-1 text-gray-600 focus:outline-none">
                                <option>All Categories</option>
                                <option>Vegetables</option>
                                <option>Fruits</option>
                                <option>Grains</option>
                            </select>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Farmer</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Current Bid</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Time Left</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-700">Organic Potatoes</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-700">Ramesh Kumar</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-700">500 kg</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-green-600">₹22/kg</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-700">2 hours</td>
                                        <td class="px-4 py-3 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-700">Basmati Rice</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-700">Sukhwinder Singh</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-700">1000 kg</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-green-600">₹65/kg</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-700">5 hours</td>
                                        <td class="px-4 py-3 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-700">Fresh Tomatoes</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-700">Lakshmi Patel</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-700">300 kg</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-green-600">₹30/kg</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-700">1 hour</td>
                                        <td class="px-4 py-3 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Hot</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-700">Alphonso Mangoes</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-700">Raghav Desai</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-700">200 kg</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-green-600">₹120/kg</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-700">30 mins</td>
                                        <td class="px-4 py-3 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Ending Soon</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="mt-4 text-right">
                                <a href="#" class="text-sm text-green-500 hover:underline">View All Bids →</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Recent Activities -->
                    <div class="bg-white rounded-lg shadow-sm p-6 dashboard-card">
                        <h3 class="text-lg font-semibold text-gray-700 mb-4">Recent Activities</h3>
                        <div class="space-y-4 overflow-y-auto custom-scrollbar" style="max-height: 320px;">
                            <div class="flex items-start space-x-3">
                                <div class="bg-blue-100 text-blue-500 rounded-full p-2">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-700">New farmer registered</p>
                                    <p class="text-xs text-gray-500">Ramesh Kumar from Pune</p>
                                    <p class="text-xs text-gray-400 mt-1">2 hours ago</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-3">
                                <div class="bg-green-100 text-green-500 rounded-full p-2">
                                    <i class="fas fa-gavel"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-700">New bid placed</p>
                                    <p class="text-xs text-gray-500">₹30/kg for Fresh Tomatoes</p>
                                    <p class="text-xs text-gray-400 mt-1">4 hours ago</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-3">
                                <div class="bg-yellow-100 text-yellow-500 rounded-full p-2">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-700">New review</p>
                                    <p class="text-xs text-gray-500">5 stars for Organic Apples</p>
                                    <p class="text-xs text-gray-400 mt-1">6 hours ago</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-3">
                                <div class="bg-purple-100 text-purple-500 rounded-full p-2">
                                    <i class="fas fa-handshake"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-700">Deal completed</p>
                                    <p class="text-xs text-gray-500">Basmati Rice for ₹60,000</p>
                                    <p class="text-xs text-gray-400 mt-1">8 hours ago</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-3">
                                <div class="bg-red-100 text-red-500 rounded-full p-2">
                                    <i class="fas fa-exclamation-circle"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-700">Product nearly sold out</p>
                                    <p class="text-xs text-gray-500">Organic Tomatoes (5 kg left)</p>
                                    <p class="text-xs text-gray-400 mt-1">10 hours ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Agri Centers Map -->
                <div class="mt-8 bg-white rounded-lg shadow-sm p-6 dashboard-card">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-700">Agri Centers</h3>
                        <a href="#" class="text-sm text-green-500 hover:underline">View All Centers</a>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">
                        <div class="border rounded-lg p-4 hover:shadow-md transition-shadow">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-500">
                                    <i class="fas fa-warehouse"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium text-gray-800">Pune Agri Center</h4>
                                    <p class="text-xs text-gray-500">Pune, Maharashtra</p>
                                </div>
                            </div>
                            <div class="mt-3 text-sm text-gray-600">
                                <p class="flex items-center"><i class="fas fa-users mr-2 text-gray-400"></i> 28 Farmers</p>
                                <p class="flex items-center"><i class="fas fa-seedling mr-2 text-gray-400"></i> 12 Crop Types</p>
                                <p class="flex items-center"><i class="fas fa-truck mr-2 text-gray-400"></i> 8 Active Shipments</p>
                            </div>
                        </div>
                        
                        <div class="border rounded-lg p-4 hover:shadow-md transition-shadow">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-500">
                                    <i class="fas fa-warehouse"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium text-gray-800">Nashik Agri Hub</h4>
                                    <p class="text-xs text-gray-500">Nashik, Maharashtra</p>
                                </div>
                            </div>
                            <div class="mt-3 text-sm text-gray-600">
                                <p class="flex items-center"><i class="fas fa-users mr-2 text-gray-400"></i> 35 Farmers</p>
                                <p class="flex items-center"><i class="fas fa-seedling mr-2 text-gray-400"></i> 8 Crop Types</p>
                                <p class="flex items-center"><i class="fas fa-truck mr-2 text-gray-400"></i> 12 Active Shipments</p>
                            </div>
                        </div>
                        
                        <div class="border rounded-lg p-4 hover:shadow-md transition-shadow">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-500">
                                    <i class="fas fa-warehouse"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium text-gray-800">Amritsar Grain Center</h4>
                                    <p class="text-xs text-gray-500">Amritsar, Punjab</p>
                                </div>
                            </div>
                            <div class="mt-3 text-sm text-gray-600">
                                <p class="flex items-center"><i class="fas fa-users mr-2 text-gray-400"></i> 42 Farmers</p>
                                <p class="flex items-center"><i class="fas fa-seedling mr-2 text-gray-400"></i> 6 Crop Types</p>
                                <p class="flex items-center"><i class="fas fa-truck mr-2 text-gray-400"></i> 15 Active Shipments</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gray-100 rounded-lg h-64 flex items-center justify-center">
                        <div class="text-center">
                            <i class="fas fa-map-marked-alt text-4xl text-gray-400 mb-2"></i>
                            <p class="text-gray-500">Interactive Map Coming Soon</p>
                            <p class="text-xs text-gray-400">Showing location of all 42 Agri Centers across India</p>
                        </div>
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