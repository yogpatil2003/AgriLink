<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriLink - Edit Category</title>
    
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
        
        .color-picker-item {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            position: relative;
            transition: all 0.2s ease;
        }
        
        .color-picker-item:hover {
            transform: scale(1.1);
        }
        
        .color-picker-item.selected::after {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-shadow: 0 0 3px rgba(0, 0, 0, 0.5);
        }
        
        .icon-preview {
            transition: all 0.3s ease;
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
                    <h2 class="text-xl font-semibold text-gray-700">Edit Category</h2>
                </div>
                
                <div class="flex items-center space-x-4">
                    <a href="{{ url('/admin/categories') }}" class="text-sm text-gray-600 hover:text-gray-900 flex items-center">
                        <i class="fas fa-arrow-left mr-2"></i> Back to Categories
                    </a>
                </div>
            </header>
            
            <!-- Edit Category Content -->
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Edit Category Form -->
                    <div class="md:col-span-2">
                        <div class="bg-white rounded-lg shadow-sm p-6">
                            <h3 class="text-lg font-semibold text-gray-700 mb-6">Category Details</h3>
                            
                            <form action="#" method="POST" class="space-y-6">
                                @csrf
                                <div>
                                    <label for="category_name" class="block text-sm font-medium text-gray-700 mb-1">Category Name*</label>
                                    <input type="text" id="category_name" name="name" class="w-full border rounded-lg p-2.5 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Enter category name" value="Vegetables" required>
                                </div>
                                
                                <div>
                                    <label for="category_slug" class="block text-sm font-medium text-gray-700 mb-1">Slug</label>
                                    <div class="relative">
                                        <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                                            <i class="fas fa-link"></i>
                                        </span>
                                        <input type="text" id="category_slug" name="slug" class="w-full border rounded-lg py-2.5 pl-10 pr-3 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="enter-slug-here" value="vegetables">
                                    </div>
                                    <p class="text-xs text-gray-500 mt-1">URL-friendly version of the name (auto-generated if left empty)</p>
                                </div>
                                
                                <div>
                                    <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                                    <textarea id="description" name="description" rows="4" class="w-full border rounded-lg p-2.5 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Enter category description">Fresh farm vegetables direct from farmers.</textarea>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-3">Category Icon</label>
                                    <div class="flex items-center space-x-4 mb-4">
                                        <div class="w-16 h-16 bg-green-100 rounded-lg flex items-center justify-center icon-preview">
                                            <i id="icon-preview" class="fas fa-carrot text-green-500 text-2xl"></i>
                                        </div>
                                        <div>
                                            <div class="relative">
                                                <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                                                    <i class="fas fa-icons"></i>
                                                </span>
                                                <input type="text" id="category_icon" name="icon" class="w-full border rounded-lg py-2.5 pl-10 pr-3 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="e.g. fa-carrot" value="fa-carrot" onkeyup="updateIconPreview()">
                                            </div>
                                            <p class="text-xs text-gray-500 mt-1">Use Font Awesome icon name (e.g. fa-carrot)</p>
                                        </div>
                                    </div>
                                    
                                    <div class="mt-3">
                                        <p class="text-sm font-medium text-gray-700 mb-2">Icon Color</p>
                                        <div class="flex flex-wrap gap-2">
                                            <div class="color-picker-item bg-green-500 selected" data-color="green" onclick="selectColor(this)"></div>
                                            <div class="color-picker-item bg-blue-500" data-color="blue" onclick="selectColor(this)"></div>
                                            <div class="color-picker-item bg-red-500" data-color="red" onclick="selectColor(this)"></div>
                                            <div class="color-picker-item bg-yellow-500" data-color="yellow" onclick="selectColor(this)"></div>
                                            <div class="color-picker-item bg-purple-500" data-color="purple" onclick="selectColor(this)"></div>
                                            <div class="color-picker-item bg-pink-500" data-color="pink" onclick="selectColor(this)"></div>
                                            <div class="color-picker-item bg-indigo-500" data-color="indigo" onclick="selectColor(this)"></div>
                                            <div class="color-picker-item bg-gray-500" data-color="gray" onclick="selectColor(this)"></div>
                                            <input type="hidden" name="icon_color" id="icon_color" value="green">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="border-t pt-6">
                                    <h4 class="text-base font-medium text-gray-700 mb-3">Status Settings</h4>
                                    
                                    <div class="flex items-center">
                                        <input type="checkbox" id="is_active" name="is_active" class="rounded text-green-600 focus:ring-green-500 mr-2" checked>
                                        <label for="is_active" class="text-sm text-gray-700">Active</label>
                                    </div>
                                    <p class="text-xs text-gray-500 mt-1">Inactive categories will not be visible to users</p>
                                </div>
                                
                                <div class="flex justify-end space-x-3 pt-4 border-t">
                                    <a href="{{ url('/admin/categories') }}" class="px-4 py-2 border border-gray-300 rounded-lg text-sm text-gray-700 hover:bg-gray-50">Cancel</a>
                                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-lg text-sm">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <!-- Info Panel -->
                    <div class="md:col-span-1">
                        <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                            <h4 class="text-base font-medium text-gray-700 mb-4">Category Information</h4>
                            
                            <div class="space-y-4">
                                <div>
                                    <p class="text-xs font-medium text-gray-500">Created</p>
                                    <p class="text-sm text-gray-800">April 10, 2023 at 14:30</p>
                                </div>
                                
                                <div>
                                    <p class="text-xs font-medium text-gray-500">Last Modified</p>
                                    <p class="text-sm text-gray-800">April 15, 2023 at 09:45</p>
                                </div>
                                
                                <div>
                                    <p class="text-xs font-medium text-gray-500">ID</p>
                                    <p class="text-sm text-gray-800">#CAT-1001</p>
                                </div>
                            </div>
                            
                            <div class="border-t mt-4 pt-4">
                                <h4 class="text-base font-medium text-gray-700 mb-2">Statistics</h4>
                                
                                <div class="space-y-2">
                                    <div class="flex justify-between items-center">
                                        <p class="text-sm text-gray-600">Products</p>
                                        <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">32</span>
                                    </div>
                                    
                                    <div class="flex justify-between items-center">
                                        <p class="text-sm text-gray-600">Farmers</p>
                                        <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">18</span>
                                    </div>
                                    
                                    <div class="flex justify-between items-center">
                                        <p class="text-sm text-gray-600">Total Orders</p>
                                        <span class="px-2 py-1 text-xs rounded-full bg-purple-100 text-purple-800">156</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-white rounded-lg shadow-sm p-6">
                            <h4 class="text-base font-medium text-gray-700 mb-4">Danger Zone</h4>
                            
                            <div class="space-y-4">
                                <button type="button" class="w-full flex items-center justify-between bg-red-50 text-red-700 px-4 py-3 rounded-lg hover:bg-red-100 text-sm">
                                    <span>Delete Category</span>
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                
                                <p class="text-xs text-gray-500">This action cannot be undone. All products in this category will need to be reassigned.</p>
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
        
        // Update icon preview when typing
        function updateIconPreview() {
            const iconInput = document.getElementById('category_icon');
            const iconPreview = document.getElementById('icon-preview');
            
            // Remove all classes first
            iconPreview.className = '';
            
            // Add the fa prefix if not present
            let iconClass = iconInput.value;
            if (!iconClass.startsWith('fa-')) {
                iconClass = 'fa-' + iconClass;
            }
            
            // Add classes
            iconPreview.classList.add('fas');
            iconPreview.classList.add(iconClass);
            iconPreview.classList.add('text-' + document.getElementById('icon_color').value + '-500');
            iconPreview.classList.add('text-2xl');
        }
        
        // Color picker functionality
        function selectColor(element) {
            // Remove selected class from all items
            document.querySelectorAll('.color-picker-item').forEach(item => {
                item.classList.remove('selected');
            });
            
            // Add selected class to clicked item
            element.classList.add('selected');
            
            // Update hidden input value
            const color = element.getAttribute('data-color');
            document.getElementById('icon_color').value = color;
            
            // Update icon preview color
            const iconPreview = document.getElementById('icon-preview');
            
            // Remove all color classes
            iconPreview.className = iconPreview.className.replace(/text-\w+-500/g, '');
            
            // Add new color class
            iconPreview.classList.add('text-' + color + '-500');
            
            // Update the background color of the preview container
            const previewContainer = document.querySelector('.icon-preview');
            
            // Remove all background color classes
            previewContainer.className = previewContainer.className.replace(/bg-\w+-100/g, '');
            
            // Add new background color class
            previewContainer.classList.add('bg-' + color + '-100');
        }
    </script>
</body>
</html> 