<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriLink - Categories</title>
    
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
        .category-card {
            transition: all 0.3s ease;
        }
        
        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        /* Button hover effects */
        .btn-hover {
            transition: all 0.3s ease;
        }
        
        .btn-hover:hover {
            transform: translateY(-2px);
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
                    <h2 class="text-xl font-semibold text-gray-700">Categories Management</h2>
                </div>
                
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <input type="text" placeholder="Search categories..." class="px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-green-500 text-sm w-64">
                        <button class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg text-sm flex items-center btn-hover" onclick="showAddCategoryModal()">
                        <i class="fas fa-plus mr-2"></i> Add Category
                    </button>
                </div>
            </header>
            
            <!-- Stats Overview -->
            <div class="p-6 grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 p-3 bg-blue-100 rounded-full">
                            <i class="fas fa-layer-group text-blue-500 text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-500">Total Categories</p>
                            <h3 class="text-xl font-semibold text-gray-800">5</h3>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 p-3 bg-green-100 rounded-full">
                            <i class="fas fa-check-circle text-green-500 text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-500">Active Categories</p>
                            <h3 class="text-xl font-semibold text-gray-800">3</h3>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 p-3 bg-yellow-100 rounded-full">
                            <i class="fas fa-pause-circle text-yellow-500 text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-500">Inactive Categories</p>
                            <h3 class="text-xl font-semibold text-gray-800">2</h3>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 p-3 bg-purple-100 rounded-full">
                            <i class="fas fa-box text-purple-500 text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-500">Total Products</p>
                            <h3 class="text-xl font-semibold text-gray-800">124</h3>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Categories List -->
            <div class="px-6 mb-6">
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="p-4 border-b flex justify-between items-center">
                        <h3 class="text-lg font-semibold text-gray-700">All Categories</h3>
                        <div class="flex space-x-2">
                            <button class="text-sm text-gray-600 hover:text-gray-900 flex items-center">
                                <i class="fas fa-filter mr-1"></i> Filter
                            </button>
                            <button class="text-sm text-gray-600 hover:text-gray-900 flex items-center">
                                <i class="fas fa-download mr-1"></i> Export
                            </button>
                        </div>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Products</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <!-- Category Row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10 bg-green-100 rounded-full flex items-center justify-center">
                                                <i class="fas fa-carrot text-green-500"></i>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Vegetables</div>
                                                <div class="text-xs text-gray-500">Fresh farm vegetables</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">32 Products</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <div class="flex space-x-2">
                                            <button onclick="showEditCategoryModal('Vegetables')" class="px-2 py-1 bg-indigo-100 text-indigo-700 rounded hover:bg-indigo-200">
                                                <i class="fas fa-edit"></i> Edit
                                            </button>
                                            <button class="px-2 py-1 bg-red-100 text-red-700 rounded hover:bg-red-200">
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Category Row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10 bg-red-100 rounded-full flex items-center justify-center">
                                                <i class="fas fa-apple-alt text-red-500"></i>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Fruits</div>
                                                <div class="text-xs text-gray-500">Fresh seasonal fruits</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">28 Products</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <div class="flex space-x-2">
                                            <button onclick="showEditCategoryModal('Fruits')" class="px-2 py-1 bg-indigo-100 text-indigo-700 rounded hover:bg-indigo-200">
                                                <i class="fas fa-edit"></i> Edit
                                            </button>
                                            <button class="px-2 py-1 bg-red-100 text-red-700 rounded hover:bg-red-200">
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Category Row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10 bg-yellow-100 rounded-full flex items-center justify-center">
                                                <i class="fas fa-wheat-awn text-yellow-500"></i>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Grains</div>
                                                <div class="text-xs text-gray-500">Premium quality grains</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">18 Products</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <div class="flex space-x-2">
                                            <button onclick="showEditCategoryModal('Grains')" class="px-2 py-1 bg-indigo-100 text-indigo-700 rounded hover:bg-indigo-200">
                                                <i class="fas fa-edit"></i> Edit
                                            </button>
                                            <button class="px-2 py-1 bg-red-100 text-red-700 rounded hover:bg-red-200">
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Category Row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10 bg-blue-100 rounded-full flex items-center justify-center">
                                                <i class="fas fa-cow text-blue-500"></i>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Dairy</div>
                                                <div class="text-xs text-gray-500">Farm fresh dairy products</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">14 Products</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Inactive</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <div class="flex space-x-2">
                                            <button onclick="showEditCategoryModal('Dairy')" class="px-2 py-1 bg-indigo-100 text-indigo-700 rounded hover:bg-indigo-200">
                                                <i class="fas fa-edit"></i> Edit
                                            </button>
                                            <button class="px-2 py-1 bg-red-100 text-red-700 rounded hover:bg-red-200">
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="px-6 py-3 flex items-center justify-between border-t">
                        <div class="flex-1 flex justify-between sm:hidden">
                            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">Previous</a>
                            <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">Next</a>
                        </div>
                        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                            <div>
                                <p class="text-sm text-gray-700">
                                    Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of <span class="font-medium">18</span> results
                                </p>
                            </div>
                            <div>
                                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                    <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <span class="sr-only">Previous</span>
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                    <a href="#" aria-current="page" class="z-10 bg-green-50 border-green-500 text-green-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">1</a>
                                    <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">2</a>
                                    <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">3</a>
                                    <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">...</span>
                                    <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">8</a>
                                    <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">9</a>
                                    <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">10</a>
                                    <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <span class="sr-only">Next</span>
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
    <!-- Add Category Modal -->
    <div id="addCategoryModal" class="fixed inset-0 z-50 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="fixed inset-0 bg-black bg-opacity-50 transition-opacity" onclick="hideAddCategoryModal()"></div>
            
            <div class="relative bg-white rounded-lg max-w-lg w-full p-6 overflow-hidden shadow-xl">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-semibold text-gray-800">Add New Category</h3>
                    <button onclick="hideAddCategoryModal()" class="text-gray-400 hover:text-gray-500">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                
                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="category_name" class="block text-sm font-medium text-gray-700 mb-1">Category Name</label>
                        <input type="text" id="category_name" name="name" class="w-full border rounded-lg p-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Enter category name" required>
                    </div>
                    
                    <div>
                        <label for="category_icon" class="block text-sm font-medium text-gray-700 mb-1">Icon (Font Awesome)</label>
                        <div class="relative">
                            <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                                <i class="fas fa-icons"></i>
                            </span>
                            <input type="text" id="category_icon" name="icon" class="w-full border rounded-lg py-2 pl-10 pr-3 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="e.g. fa-carrot" required>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">Use Font Awesome icon name (e.g. fa-carrot)</p>
                    </div>
                    
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                        <textarea id="description" name="description" rows="3" class="w-full border rounded-lg p-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Enter category description"></textarea>
                    </div>
                    
                    <div class="flex items-center">
                        <input type="checkbox" id="is_active" name="is_active" class="rounded text-green-600 focus:ring-green-500 mr-2" checked>
                        <label for="is_active" class="text-sm text-gray-700">Active</label>
                    </div>
                    
                    <div class="flex justify-end space-x-3 pt-4">
                        <button type="button" onclick="hideAddCategoryModal()" class="px-4 py-2 border border-gray-300 rounded-lg text-sm text-gray-700 hover:bg-gray-50">Cancel</button>
                        <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg text-sm">Add Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Edit Category Modal -->
    <div id="editCategoryModal" class="fixed inset-0 z-50 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="fixed inset-0 bg-black bg-opacity-50 transition-opacity" onclick="hideEditCategoryModal()"></div>
            
            <div class="relative bg-white rounded-lg max-w-lg w-full p-6 overflow-hidden shadow-xl">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-semibold text-gray-800">Edit Category: <span id="categoryNameTitle">Category</span></h3>
                    <button onclick="hideEditCategoryModal()" class="text-gray-400 hover:text-gray-500">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                
                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="edit_category_name" class="block text-sm font-medium text-gray-700 mb-1">Category Name</label>
                        <input type="text" id="edit_category_name" name="name" class="w-full border rounded-lg p-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Enter category name" required>
                    </div>
                    
                    <div>
                        <label for="edit_category_icon" class="block text-sm font-medium text-gray-700 mb-1">Icon (Font Awesome)</label>
                        <div class="relative">
                            <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                                <i class="fas fa-icons"></i>
                            </span>
                            <input type="text" id="edit_category_icon" name="icon" class="w-full border rounded-lg py-2 pl-10 pr-3 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="e.g. fa-carrot" required>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">Use Font Awesome icon name (e.g. fa-carrot)</p>
                    </div>
                    
                    <div>
                        <label for="edit_description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                        <textarea id="edit_description" name="description" rows="3" class="w-full border rounded-lg p-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Enter category description"></textarea>
                    </div>
                    
                    <div class="flex items-center">
                        <input type="checkbox" id="edit_is_active" name="is_active" class="rounded text-green-600 focus:ring-green-500 mr-2" checked>
                        <label for="edit_is_active" class="text-sm text-gray-700">Active</label>
                    </div>
                    
                    <div class="flex justify-end space-x-3 pt-4">
                        <button type="button" onclick="hideEditCategoryModal()" class="px-4 py-2 border border-gray-300 rounded-lg text-sm text-gray-700 hover:bg-gray-50">Cancel</button>
                        <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg text-sm">Save Changes</button>
                    </div>
                </form>
            </div>
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
        
        // Modal functions
        function showAddCategoryModal() {
            document.getElementById('addCategoryModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
        
        function hideAddCategoryModal() {
            document.getElementById('addCategoryModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
        
        function showEditCategoryModal(categoryName) {
            // Set the category name in the modal title
            document.getElementById('categoryNameTitle').textContent = categoryName;
            
            // Here you would typically fetch the category data from the server and populate the form
            // For this example, we'll just set the name
            document.getElementById('edit_category_name').value = categoryName;
            
            // Show the modal
            document.getElementById('editCategoryModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
        
        function hideEditCategoryModal() {
            document.getElementById('editCategoryModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
    </script>
</body>
</html> 