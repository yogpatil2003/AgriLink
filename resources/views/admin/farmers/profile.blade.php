<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriLink - Farmer Profile</title>
    
    <?php
    // Get farmer ID from URL
    $farmerId = request()->segment(4);
    ?>
    
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
                    <h2 class="text-xl font-semibold text-gray-700">Farmer Profile</h2>
                </div>
                
                <div class="flex items-center space-x-4">
                    <a href="{{ url('/admin/farmers') }}" class="flex items-center text-sm text-gray-600 hover:text-gray-900">
                        <i class="fas fa-arrow-left mr-2"></i> Back to Farmers
                    </a>
                </div>
            </header>
            
            <!-- Profile Content -->
            <div class="p-6">
                <!-- Farmer Details Card -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <div class="flex flex-col md:flex-row">
                        <div class="md:w-1/4 mb-4 md:mb-0 flex flex-col items-center justify-center">
                            <img src="{{asset('img/prashant.jpeg')}}" alt="Farmer" class="w-32 h-32 rounded-full mb-3">
                            <h3 class="font-semibold text-gray-800 text-xl">Prshant Patil</h3>
                            <p class="text-gray-500">Pune, Maharashtra</p>
                            <div class="flex items-center mt-2">
                                <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Verified</span>
                            </div>
                        </div>
                        
                        <div class="md:w-3/4 md:pl-8 md:border-l border-gray-200">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                <div>
                                    <p class="text-gray-500 text-sm">Farmer ID</p>
                                    <p class="font-medium">#FRM-10042</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Joined Date</p>
                                    <p class="font-medium">April 10, 2023</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Email</p>
                                    <p class="font-medium">ramesh.kumar@example.com</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Phone</p>
                                    <p class="font-medium">+91 9876543210</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Farm Size</p>
                                    <p class="font-medium">4.5 Acres</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Crops</p>
                                    <p class="font-medium">Vegetables, Fruits</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Address</p>
                                    <p class="font-medium">Village Marunji, Pune District, Maharashtra</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">KYC Status</p>
                                    <p class="font-medium text-green-600">Verified</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Account Status</p>
                                    <p class="font-medium text-green-600">Active</p>
                                </div>
                            </div>
                            
                            <div class="mt-6">
                                <h4 class="text-md font-semibold text-gray-700 mb-2">About</h4>
                                <p class="text-gray-600">Ramesh has been farming for over 15 years. He specializes in organic vegetables and fruits. His farm is known for high-quality produce and sustainable farming practices. He joined AgriLink to connect directly with retailers and get better prices for his produce.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                    <div class="bg-white rounded-lg shadow-sm p-5 stats-card">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Active Bids</p>
                                <h3 class="text-2xl font-bold text-gray-800">8</h3>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-green-500">
                                <i class="fas fa-gavel"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-sm p-5 stats-card">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Total Products</p>
                                <h3 class="text-2xl font-bold text-gray-800">12</h3>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-500">
                                <i class="fas fa-carrot"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-sm p-5 stats-card">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Completed Deals</p>
                                <h3 class="text-2xl font-bold text-gray-800">24</h3>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center text-yellow-500">
                                <i class="fas fa-handshake"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-sm p-5 stats-card">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Revenue</p>
                                <h3 class="text-2xl font-bold text-gray-800">₹1.8L</h3>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center text-purple-500">
                                <i class="fas fa-rupee-sign"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Active Bids Table -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-700">Farmer Products</h3>
                        <button class="text-sm text-green-500 hover:text-green-700 font-medium">View All</button>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Base Price</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Current Bid</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Highest Bidder</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10 bg-green-100 rounded-full flex items-center justify-center">
                                                <i class="fas fa-seedling text-green-500"></i>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Organic Potatoes</div>
                                                <div class="text-sm text-gray-500">Premium Quality</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Vegetables</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">500 kg</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₹18/kg</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-green-600">₹22/kg</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <div class="flex items-center">
                                            <img class="h-6 w-6 rounded-full mr-2" src="{{asset('img/image.png')}}" alt="">
                                            Fresh Mart
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active Bidding</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <a href="{{ url('/admin/farmers/product-bids', $farmerId) }}" class="text-blue-500 hover:text-blue-700">View Bids</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10 bg-red-100 rounded-full flex items-center justify-center">
                                                <i class="fas fa-apple-alt text-red-500"></i>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Fresh Tomatoes</div>
                                                <div class="text-sm text-gray-500">Farm Fresh</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Vegetables</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">300 kg</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₹25/kg</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-green-600">₹30/kg</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <div class="flex items-center">
                                            <img class="h-6 w-6 rounded-full mr-2" src="{{asset('img/chetan.jpeg')}}" alt="">
                                            Spice Garden Restaurant
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Hot Bidding</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <a href="{{ url('/admin/farmers/product-bids', $farmerId) }}" class="text-blue-500 hover:text-blue-700">View Bids</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10 bg-yellow-100 rounded-full flex items-center justify-center">
                                                <i class="fas fa-lemon text-yellow-500"></i>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Basmati Rice</div>
                                                <div class="text-sm text-gray-500">Premium Quality</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Grains</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">500 kg</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₹60/kg</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-green-600">₹65/kg</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <div class="flex items-center">
                                            <img class="h-6 w-6 rounded-full mr-2" src="{{asset('img/saurav.jpeg')}}" alt="">
                                            Green Grocers
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active Bidding</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <a href="{{ url('/admin/farmers/product-bids', $farmerId) }}" class="text-blue-500 hover:text-blue-700">View Bids</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10 bg-green-100 rounded-full flex items-center justify-center">
                                                <i class="fas fa-leaf text-green-500"></i>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Green Peas</div>
                                                <div class="text-sm text-gray-500">Organic</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Vegetables</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">200 kg</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₹35/kg</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-green-600">₹38/kg</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <div class="flex items-center">
                                            <img class="h-6 w-6 rounded-full mr-2" src="https://randomuser.me/api/portraits/women/2.jpg" alt="">
                                            Green Grocers
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active Bidding</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <a href="{{ url('/admin/farmers/product-bids', $farmerId) }}" class="text-blue-500 hover:text-blue-700">View Bids</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Recent Activity -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-700">Recent Activity</h3>
                        <button class="text-sm text-green-500 hover:text-green-700 font-medium">View All</button>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <div class="bg-green-100 text-green-500 rounded-full p-2">
                                <i class="fas fa-gavel"></i>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-700">New bid received on Organic Potatoes</p>
                                <p class="text-xs text-gray-500">Fresh Mart increased bid to ₹22/kg</p>
                                <p class="text-xs text-gray-400 mt-1">30 minutes ago</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-3">
                            <div class="bg-blue-100 text-blue-500 rounded-full p-2">
                                <i class="fas fa-plus-circle"></i>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-700">Added new product for bidding</p>
                                <p class="text-xs text-gray-500">Green Peas - 200 kg at base price of ₹35/kg</p>
                                <p class="text-xs text-gray-400 mt-1">2 hours ago</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-3">
                            <div class="bg-yellow-100 text-yellow-500 rounded-full p-2">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-700">Deal completed</p>
                                <p class="text-xs text-gray-500">Sold 400 kg Onions to Mega Wholesalers at ₹20/kg</p>
                                <p class="text-xs text-gray-400 mt-1">Yesterday</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-3">
                            <div class="bg-purple-100 text-purple-500 rounded-full p-2">
                                <i class="fas fa-star"></i>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-700">Received 5-star rating</p>
                                <p class="text-xs text-gray-500">Green Grocers rated 5 stars for Carrot delivery</p>
                                <p class="text-xs text-gray-400 mt-1">2 days ago</p>
                            </div>
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