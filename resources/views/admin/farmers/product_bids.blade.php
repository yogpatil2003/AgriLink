<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriLink - Product Bids</title>
    
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
        .bid-card {
            transition: all 0.3s ease;
        }
        
        .bid-card:hover {
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
                    <h2 class="text-xl font-semibold text-gray-700">Product Bids</h2>
                </div>
                
                <div class="flex items-center space-x-4">
                    <a href="{{ url('/admin/farmers/profile', $farmerId) }}" class="flex items-center text-sm text-gray-600 hover:text-gray-900">
                        <i class="fas fa-arrow-left mr-2"></i> Back to Farmer Profile
                    </a>
                </div>
            </header>
            
            <!-- Product Details Card -->
            <div class="p-6">
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <div class="flex flex-col md:flex-row">
                        <div class="md:w-1/4 mb-4 md:mb-0 flex flex-col items-center justify-center">
                            <div class="w-32 h-32 bg-green-100 rounded-full flex items-center justify-center mb-3">
                                <i class="fas fa-seedling text-green-500 text-4xl"></i>
                            </div>
                            <h3 class="font-semibold text-gray-800 text-xl">Organic Potatoes</h3>
                            <p class="text-gray-500">Premium Quality</p>
                            <div class="flex items-center mt-2">
                                <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Active Bidding</span>
                            </div>
                        </div>
                        
                        <div class="md:w-3/4 md:pl-8 md:border-l border-gray-200">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                <div>
                                    <p class="text-gray-500 text-sm">Farmer</p>
                                    <div class="font-medium flex items-center">
                                        <img src="{{asset('img/prashant.jpeg')}}" alt="Farmer" class="w-6 h-6 rounded-full mr-2">
                                        Prshant Patil
                                    </div>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Category</p>
                                    <p class="font-medium">Vegetables</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Quantity Available</p>
                                    <p class="font-medium">500 kg</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Base Price</p>
                                    <p class="font-medium">₹18/kg</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Current Highest Bid</p>
                                    <p class="font-medium text-green-600">₹22/kg</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Bidding Ends In</p>
                                    <p class="font-medium text-red-500">2 hours</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Listing Date</p>
                                    <p class="font-medium">April 25, 2023</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Total Bids</p>
                                    <p class="font-medium">6 bids</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Minimum Bid Increment</p>
                                    <p class="font-medium">₹0.50/kg</p>
                                </div>
                            </div>
                            
                            <div class="mt-6">
                                <h4 class="text-md font-semibold text-gray-700 mb-2">Product Description</h4>
                                <p class="text-gray-600">Premium quality organic potatoes grown using sustainable farming practices. These potatoes are fresh, clean, and of uniform size, perfect for restaurants and retail stores. The potatoes are harvested just before listing and will be delivered within 24 hours of bid closing.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- All Bids -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-semibold text-gray-700">All Bids (6)</h3>
                        <div class="flex items-center">
                            <select class="px-3 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-green-500 text-sm">
                                <option>Sort by: Latest First</option>
                                <option>Sort by: Highest Bid</option>
                                <option>Sort by: Lowest Bid</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Bids Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Bid Card 1 - Highest Bid -->
                        <div class="bg-white border border-green-200 rounded-lg shadow-sm p-5 bid-card relative">
                            <div class="absolute -top-3 -right-3 bg-green-500 text-white rounded-full w-8 h-8 flex items-center justify-center">
                                <i class="fas fa-trophy text-xs"></i>
                            </div>
                            
                            <div class="flex justify-between items-start">
                                <div class="flex space-x-3">
                                    <img src="{{asset('img/image.png')}}" alt="Retailer" class="w-12 h-12 rounded-full">
                                    <div>
                                        <h3 class="font-semibold text-gray-800">Fresh Mart</h3>
                                        <p class="text-xs text-gray-500">Bangalore, Karnataka</p>
                                        <div class="flex items-center mt-1">
                                            <span class="text-xs text-gray-500">Retailer ID: #RTL-10018</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-4">
                                <div class="flex justify-between items-center border-b pb-2 mb-2">
                                    <p class="text-gray-500 text-sm">Bid Amount</p>
                                    <p class="font-bold text-green-600">₹22/kg</p>
                                </div>
                                <div class="flex justify-between items-center border-b pb-2 mb-2">
                                    <p class="text-gray-500 text-sm">Quantity</p>
                                    <p class="font-medium">500 kg</p>
                                </div>
                                <div class="flex justify-between items-center">
                                    <p class="text-gray-500 text-sm">Timestamp</p>
                                    <p class="text-sm">Today, 10:45 AM</p>
                                </div>
                            </div>
                            
                            <div class="mt-4 pt-4 border-t border-gray-100">
                                <div class="flex justify-between items-center">
                                    <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Highest Bid</span>
                                    <a href="#" class="text-green-500 hover:text-green-700 text-sm font-medium">View Retailer Profile</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Bid Card 2 -->
                        <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-5 bid-card">
                            <div class="flex justify-between items-start">
                                <div class="flex space-x-3">
                                    <img src="{{asset('img/chetan.jpeg')}}" alt="Retailer" class="w-12 h-12 rounded-full">
                                    <div>
                                        <h3 class="font-semibold text-gray-800">Mega Wholesalers</h3>
                                        <p class="text-xs text-gray-500">Mumbai, Maharashtra</p>
                                        <div class="flex items-center mt-1">
                                            <span class="text-xs text-gray-500">Retailer ID: #RTL-10009</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-4">
                                <div class="flex justify-between items-center border-b pb-2 mb-2">
                                    <p class="text-gray-500 text-sm">Bid Amount</p>
                                    <p class="font-bold text-gray-700">₹21/kg</p>
                                </div>
                                <div class="flex justify-between items-center border-b pb-2 mb-2">
                                    <p class="text-gray-500 text-sm">Quantity</p>
                                    <p class="font-medium">400 kg</p>
                                </div>
                                <div class="flex justify-between items-center">
                                    <p class="text-gray-500 text-sm">Timestamp</p>
                                    <p class="text-sm">Today, 10:30 AM</p>
                                </div>
                            </div>
                            
                            <div class="mt-4 pt-4 border-t border-gray-100">
                                <div class="flex justify-between items-center">
                                    <span class="px-2 py-1 text-xs rounded-full bg-gray-100 text-gray-800">Outbid</span>
                                    <a href="#" class="text-green-500 hover:text-green-700 text-sm font-medium">View Retailer Profile</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Bid Card 3 -->
                        <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-5 bid-card">
                            <div class="flex justify-between items-start">
                                <div class="flex space-x-3">
                                    <img src="{{asset('img/saurav.jpeg')}}" alt="Retailer" class="w-12 h-12 rounded-full">
                                    <div>
                                        <h3 class="font-semibold text-gray-800">Modern Grocers</h3>
                                        <p class="text-xs text-gray-500">Pune, Maharashtra</p>
                                        <div class="flex items-center mt-1">
                                            <span class="text-xs text-gray-500">Retailer ID: #RTL-10022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-4">
                                <div class="flex justify-between items-center border-b pb-2 mb-2">
                                    <p class="text-gray-500 text-sm">Bid Amount</p>
                                    <p class="font-bold text-gray-700">₹20.50/kg</p>
                                </div>
                                <div class="flex justify-between items-center border-b pb-2 mb-2">
                                    <p class="text-gray-500 text-sm">Quantity</p>
                                    <p class="font-medium">250 kg</p>
                                </div>
                                <div class="flex justify-between items-center">
                                    <p class="text-gray-500 text-sm">Timestamp</p>
                                    <p class="text-sm">Today, 9:45 AM</p>
                                </div>
                            </div>
                            
                            <div class="mt-4 pt-4 border-t border-gray-100">
                                <div class="flex justify-between items-center">
                                    <span class="px-2 py-1 text-xs rounded-full bg-gray-100 text-gray-800">Outbid</span>
                                    <a href="#" class="text-green-500 hover:text-green-700 text-sm font-medium">View Retailer Profile</a>
                                </div>
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