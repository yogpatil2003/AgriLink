<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriLink - Product Details</title>
    
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
        
        .main-content {
            margin-left: 280px;
        }
        
        /* Image gallery */
        .product-image {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .product-image:hover {
            opacity: 0.9;
            transform: scale(1.02);
        }
        
        .product-thumbnail {
            transition: all 0.2s ease;
            cursor: pointer;
            border: 2px solid transparent;
        }
        
        .product-thumbnail:hover {
            border-color: #10B981;
        }
        
        .product-thumbnail.active {
            border-color: #10B981;
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
                    <h2 class="text-xl font-semibold text-gray-700">Product Details</h2>
                </div>
                
                <div class="flex items-center space-x-4">
                    <a href="{{ url('/admin/products') }}" class="flex items-center text-sm text-gray-600 hover:text-gray-900">
                        <i class="fas fa-arrow-left mr-2"></i> Back to Products
                    </a>
                </div>
            </header>
            
            <!-- Status Badge Bar -->
            <div class="bg-yellow-100 text-yellow-800 px-6 py-3 flex items-center justify-between mb-6 mt-6 mx-6 rounded-lg">
                <div class="flex items-center">
                    <i class="fas fa-exclamation-circle mr-2"></i>
                    <span class="font-medium">This product is pending approval</span>
                </div>
                <div class="flex space-x-2">
                    <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded text-sm flex items-center">
                        <i class="fas fa-check mr-2"></i> Approve
                    </button>
                    <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded text-sm flex items-center">
                        <i class="fas fa-times mr-2"></i> Reject
                    </button>
                </div>
            </div>
            
            <!-- Product Details -->
            <div class="p-6">
                <!-- Product Images & Info Section -->
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 mb-6">
                    <!-- Product Images Column -->
                    <div class="md:col-span-5 bg-white p-6 rounded-lg shadow-sm">
                        <!-- Main Image -->
                        <div class="relative h-96 w-full mb-6 rounded-lg overflow-hidden bg-gray-100 border">
                            <img id="mainImage" src="{{asset('img/download.jpg')}}" 
                                alt="Premium Wheat" class="h-full w-full object-contain product-image">
                            <div class="absolute bottom-4 right-4">
                                <button class="bg-white p-2 rounded-full shadow hover:bg-gray-100" title="View full size">
                                    <i class="fas fa-search-plus text-gray-700"></i>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Thumbnail Images -->
                        <div class="grid grid-cols-4 gap-4">
                            <div class="h-20 rounded-lg overflow-hidden border product-thumbnail active" onclick="changeImage(this, 'https://images.unsplash.com/photo-1603085002620-73fe9def3417?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80')">
                                <img src="{{asset('img/download.jpg')}}" 
                                    alt="Premium Wheat" class="h-full w-full object-cover">
                            </div>
                            <div class="h-20 rounded-lg overflow-hidden border product-thumbnail" onclick="changeImage(this, 'https://images.unsplash.com/photo-1574323347407-f5e1c38b8b0e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80')">
                                <img src="{{asset('img/download.jpg')}}" 
                                    alt="Premium Wheat - Detail" class="h-full w-full object-cover">
                            </div>
                            <div class="h-20 rounded-lg overflow-hidden border product-thumbnail" onclick="changeImage(this, 'https://images.unsplash.com/photo-1595535373192-fc8536a9276a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80')">
                                <img src="{{asset('img/download.jpg')}}" 
                                    alt="Premium Wheat - Closeup" class="h-full w-full object-cover">
                            </div>
                            <div class="h-20 rounded-lg overflow-hidden border flex items-center justify-center bg-gray-50 cursor-pointer hover:bg-gray-100">
                                <i class="fas fa-plus text-gray-400"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product Information Column -->
                    <div class="md:col-span-7 bg-white p-6 rounded-lg shadow-sm">
                        <div class="border-b pb-4 mb-4">
                            <div class="flex justify-between items-start">
                                <div>
                                    <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800 font-medium">Grains</span>
                                    <h1 class="text-2xl font-bold text-gray-800 mt-2">Premium Wheat</h1>
                                </div>
                                <span class="px-3 py-1 rounded-full bg-green-100 text-green-800 text-sm font-medium">Active</span>
                            </div>
                            <p class="text-sm text-gray-600 mt-2">
                                High-quality wheat for milling. This premium wheat has been grown using sustainable farming practices 
                                and harvested at the optimal time to ensure maximum quality and nutrition.
                            </p>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="bg-gray-50 p-3 rounded-lg">
                                <p class="text-xs text-gray-500">Product ID</p>
                                <p class="text-sm font-medium">#PRD-10001</p>
                            </div>
                            <div class="bg-gray-50 p-3 rounded-lg">
                                <p class="text-xs text-gray-500">Farmer</p>
                                <p class="text-sm font-medium">Ramesh Kumar</p>
                            </div>
                            <div class="bg-gray-50 p-3 rounded-lg">
                                <p class="text-xs text-gray-500">Quantity</p>
                                <p class="text-sm font-medium">500 kg</p>
                            </div>
                            <div class="bg-gray-50 p-3 rounded-lg">
                                <p class="text-xs text-gray-500">Base Price</p>
                                <p class="text-sm font-medium">₹2,500</p>
                            </div>
                            <div class="bg-gray-50 p-3 rounded-lg">
                                <p class="text-xs text-gray-500">Quality</p>
                                <p class="text-sm font-medium">Premium</p>
                            </div>
                            <div class="bg-gray-50 p-3 rounded-lg">
                                <p class="text-xs text-gray-500">Date Added</p>
                                <p class="text-sm font-medium">April 15, 2023</p>
                            </div>
                        </div>
                        
                        <div class="border-t pt-4">
                            <h3 class="font-medium text-gray-700 mb-2">Description</h3>
                            <p class="text-sm text-gray-600">
                                High-quality wheat for milling. This premium wheat has been grown using sustainable farming practices and 
                                harvested at the optimal time to ensure maximum quality and nutrition. Perfect for flour production, 
                                baking, and other food processing applications. The grains are uniform in size and free from contaminants,
                                ensuring consistent quality and performance.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Approval/Rejection Form -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">Product Approval Process</h3>
                    
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Decision</label>
                            <div class="flex space-x-4">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="decision" value="approve" class="text-green-500 focus:ring-green-500 h-4 w-4">
                                    <span class="ml-2 text-gray-700">Approve</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="decision" value="reject" class="text-red-500 focus:ring-red-500 h-4 w-4">
                                    <span class="ml-2 text-gray-700">Reject</span>
                                </label>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Reason (if rejecting)</label>
                            <select class="w-full border rounded-lg p-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                                <option value="">Select reason</option>
                                <option value="insufficient_info">Insufficient Product Information</option>
                                <option value="poor_quality">Poor Product Quality</option>
                                <option value="pricing_issues">Pricing Issues</option>
                                <option value="incomplete_docs">Incomplete Documentation</option>
                                <option value="certification_missing">Missing Certifications</option>
                                <option value="other">Other (specify in comments)</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Comments</label>
                            <textarea rows="3" class="w-full border rounded-lg p-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Enter any comments regarding this decision"></textarea>
                        </div>
                        
                        <div class="flex justify-end space-x-3 pt-4">
                            <button class="border border-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-50 text-sm">Cancel</button>
                            <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded text-sm">Submit Decision</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="px-6 pb-6 flex justify-end space-x-3">
                <a href="{{ url('/admin/products') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <i class="fas fa-arrow-left -ml-1 mr-2 h-5 w-5 text-gray-500"></i>
                    Back to Products
                </a>
            </div>
        </main>
    </div>
    
    <!-- Image Viewer Modal -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50 hidden">
        <div class="max-w-7xl max-h-screen p-4">
            <img id="modalImage" src="" alt="Product Image" class="max-h-[90vh] max-w-full object-contain">
            <button onclick="closeModal()" class="absolute top-4 right-4 text-white text-2xl hover:text-gray-300">
                <i class="fas fa-times"></i>
            </button>
        </div>
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
        
        // Image gallery functionality
        function changeImage(thumbnail, imageUrl) {
            // Update main image
            document.getElementById('mainImage').src = imageUrl;
            
            // Update active thumbnail
            document.querySelectorAll('.product-thumbnail').forEach(thumb => {
                thumb.classList.remove('active');
            });
            thumbnail.classList.add('active');
        }
        
        // Image modal functionality
        document.getElementById('mainImage').addEventListener('click', function() {
            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            
            modalImage.src = this.src;
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        });
        
        function closeModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
        
        // Close modal when clicking outside the image
        document.getElementById('imageModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });
    </script>
</body>
</html> 