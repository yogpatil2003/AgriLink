<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriLink - Products Management</title>
    
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
        .product-card {
            transition: all 0.3s ease;
        }
        
        .product-card:hover {
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
                    <h2 class="text-xl font-semibold text-gray-700">Products Management</h2>
                </div>
                
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <input type="text" placeholder="Search products..." class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 text-sm w-64">
                        <button class="absolute right-0 top-0 h-full px-3 text-gray-500">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    
                    <select class="px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 text-sm">
                        <option>All Status</option>
                        <option>Pending</option>
                        <option>Approved</option>
                        <option>Rejected</option>
                    </select>
                    
                    <select class="px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 text-sm">
                        <option>All Categories</option>
                        <option>Vegetables</option>
                        <option>Fruits</option>
                        <option>Grains</option>
                        <option>Spices</option>
                    </select>
                </div>
            </header>
            
            <!-- Stats Cards -->
            <div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="bg-white rounded-lg shadow-sm p-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500">Total Products</p>
                            <h3 class="text-2xl font-bold text-gray-800">124</h3>
                        </div>
                        <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-500">
                            <i class="fas fa-box"></i>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-sm p-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500">Pending Approval</p>
                            <h3 class="text-2xl font-bold text-orange-500">18</h3>
                        </div>
                        <div class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center text-orange-500">
                            <i class="fas fa-clock"></i>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-sm p-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500">Active Bidding</p>
                            <h3 class="text-2xl font-bold text-green-500">76</h3>
                        </div>
                        <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-green-500">
                            <i class="fas fa-gavel"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product List -->
            <div class="px-6 mb-6">
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="p-4 flex items-center justify-between border-b">
                        <h3 class="text-lg font-semibold text-gray-700">All Products</h3>
                        <div>
                            <a href="#" class="text-sm text-green-500 hover:text-green-700 font-medium">Export CSV</a>
                        </div>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Base Price</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <!-- Product 1 -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">1</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">Premium Wheat</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Grains</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">500 kg</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₹2500</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="{{ url('/admin/products/view/1') }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                                    </td>
                                </tr>
                                
                                <!-- Product 2 -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">2</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">Organic Tomatoes</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Vegetables</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">200 kg</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₹1800</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="{{ url('/admin/products/view/2') }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                                    </td>
                                </tr>
                                
                                <!-- More product rows would go here -->
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="px-6 py-4 border-t flex items-center justify-between">
                        <p class="text-sm text-gray-500">Showing 1 to 5 of 124 entries</p>
                        <div class="flex space-x-2">
                            <button class="px-3 py-1 rounded border text-sm text-gray-600">Previous</button>
                            <button class="px-3 py-1 rounded bg-green-500 text-white text-sm">1</button>
                            <button class="px-3 py-1 rounded border text-sm text-gray-600">2</button>
                            <button class="px-3 py-1 rounded border text-sm text-gray-600">3</button>
                            <button class="px-3 py-1 rounded border text-sm text-gray-600">Next</button>
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