<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriLink - Retailer Profile</title>
    
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
                    <h2 class="text-xl font-semibold text-gray-700">Retailer Profile</h2>
                </div>
                
                <div class="flex items-center space-x-4">
                    <a href="{{ url('/admin/retailers') }}" class="flex items-center text-sm text-gray-600 hover:text-gray-900">
                        <i class="fas fa-arrow-left mr-2"></i> Back to Retailers
                    </a>
                </div>
            </header>
            
            <!-- Profile Content -->
            <div class="p-6">
                <!-- Retailer Details Card -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <div class="flex flex-col md:flex-row">
                        <div class="md:w-1/4 mb-4 md:mb-0 flex flex-col items-center justify-center">
                            <div class="w-32 h-32 bg-blue-100 rounded-full flex items-center justify-center mb-3">
                                <i class="fas fa-store text-blue-500 text-4xl"></i>
                            </div>
                            <h3 class="font-semibold text-gray-800 text-xl">Fresh Mart</h3>
                            <p class="text-gray-500">Bangalore, Karnataka</p>
                            <div class="flex items-center mt-2">
                                <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Verified</span>
                            </div>
                        </div>
                        
                        <div class="md:w-3/4 md:pl-8 md:border-l border-gray-200">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                <div>
                                    <p class="text-gray-500 text-sm">Retailer ID</p>
                                    <p class="font-medium">#RTL-10018</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Joined Date</p>
                                    <p class="font-medium">December 22, 2022</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Email</p>
                                    <p class="font-medium">info@freshmart.com</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Phone</p>
                                    <p class="font-medium">+91 8765432109</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Business Type</p>
                                    <p class="font-medium">Supermarket</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">GST Number</p>
                                    <p class="font-medium">29AABCT1234A1Z5</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Address</p>
                                    <p class="font-medium">42, MG Road, Indiranagar, Bangalore</p>
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
                                <p class="text-gray-600">Fresh Mart is a premium supermarket chain specializing in fresh produce and organic products. They have 5 stores across Bangalore and have been sourcing directly from farmers through AgriLink since December 2022. They focus on quality and sustainability in their sourcing practices.</p>
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
                                <h3 class="text-2xl font-bold text-gray-800">12</h3>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-green-500">
                                <i class="fas fa-gavel"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-sm p-5 stats-card">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Total Orders</p>
                                <h3 class="text-2xl font-bold text-gray-800">42</h3>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-500">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-sm p-5 stats-card">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Farmers Connected</p>
                                <h3 class="text-2xl font-bold text-gray-800">18</h3>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center text-yellow-500">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-sm p-5 stats-card">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Amount Spent</p>
                                <h3 class="text-2xl font-bold text-gray-800">₹4.2L</h3>
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
                        <h3 class="text-lg font-semibold text-gray-700">Bids Placed on Products</h3>
                        <button class="text-sm text-green-500 hover:text-green-700 font-medium">View All</button>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Farmer</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Base Price</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Your Bid</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ends In</th>
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
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <img class="h-6 w-6 rounded-full mr-2" src="https://randomuser.me/api/portraits/men/42.jpg" alt="">
                                            <span class="text-sm text-gray-500">Ramesh Kumar</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">500 kg</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₹18/kg</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-green-600">₹22/kg</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Highest</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2 hours</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10 bg-yellow-100 rounded-full flex items-center justify-center">
                                                <i class="fas fa-apple-alt text-yellow-500"></i>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Alphonso Mangoes</div>
                                                <div class="text-sm text-gray-500">Export Quality</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <img class="h-6 w-6 rounded-full mr-2" src="https://randomuser.me/api/portraits/men/68.jpg" alt="">
                                            <span class="text-sm text-gray-500">Raghav Desai</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">200 kg</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₹100/kg</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-green-600">₹110/kg</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Outbid</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">30 mins</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10 bg-red-100 rounded-full flex items-center justify-center">
                                                <i class="fas fa-pepper-hot text-red-500"></i>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Red Chillies</div>
                                                <div class="text-sm text-gray-500">Organic</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <img class="h-6 w-6 rounded-full mr-2" src="https://randomuser.me/api/portraits/women/31.jpg" alt="">
                                            <span class="text-sm text-gray-500">Priya Reddy</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">100 kg</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₹75/kg</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-green-600">₹82/kg</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Highest</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">4 hours</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Recent Orders -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-700">Recent Orders</h3>
                        <button class="text-sm text-green-500 hover:text-green-700 font-medium">View All</button>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Farmer</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Products</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#ORD-10234</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Apr 28, 2023</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Ramesh Kumar</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Potatoes, Onions</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">₹18,500</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Delivered</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#ORD-10228</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Apr 20, 2023</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Sukhwinder Singh</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Wheat, Rice</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">₹32,600</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Delivered</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#ORD-10215</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Apr 12, 2023</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Priya Reddy</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Coffee Beans, Spices</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">₹26,200</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">In Transit</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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