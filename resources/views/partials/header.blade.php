<!-- Admin Header Component -->
<header class="bg-white shadow-sm fixed top-0 right-0 left-0 z-20 ml-0 lg:ml-64 transition-all duration-300">
    <div class="flex items-center justify-between h-16 px-4 md:px-6">
        <!-- Left side: Title with breadcrumbs -->
        <div class="flex items-center">
            <h1 class="text-xl font-semibold text-gray-800">@yield('title', 'Dashboard')</h1>
            <div class="hidden md:flex items-center ml-4 text-sm text-gray-500">
                <a href="{{ route('admin.dashboard') }}" class="hover:text-green-600">Home</a>
                @yield('breadcrumbs')
            </div>
        </div>

        <!-- Right side: Notifications, Messages & Profile -->
        <div class="flex items-center space-x-3">
            <!-- Search Button -->
            <button class="p-2 rounded-full hover:bg-gray-100 transition-colors focus:outline-none" title="Search">
                <i class="fas fa-search text-gray-600"></i>
            </button>
            
            <!-- Notifications Dropdown -->
            <div class="relative">
                <button class="p-2 rounded-full hover:bg-gray-100 transition-colors focus:outline-none" 
                        onclick="toggleDropdown('notificationsDropdown')" title="Notifications">
                    <div class="relative">
                        <i class="fas fa-bell text-gray-600"></i>
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-4 h-4 flex items-center justify-center">3</span>
                    </div>
                </button>
                
                <div id="notificationsDropdown" class="absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-lg py-2 hidden z-30">
                    <div class="px-4 py-2 border-b border-gray-100">
                        <div class="flex justify-between items-center">
                            <h4 class="text-sm font-semibold text-gray-700">Notifications</h4>
                            <span class="text-xs text-blue-500 cursor-pointer hover:underline">Mark all as read</span>
                        </div>
                    </div>
                    
                    <div class="max-h-64 overflow-y-auto">
                        <!-- Notification Item -->
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-50 transition-colors border-l-4 border-green-500">
                            <div class="flex-shrink-0 mr-3">
                                <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-500">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                            </div>
                            <div>
                                <p class="text-sm text-gray-800">New farmer registration: <span class="font-medium">Rahul Singh</span></p>
                                <p class="text-xs text-gray-500 mt-1">5 minutes ago</p>
                            </div>
                        </a>
                        
                        <!-- Notification Item -->
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-50 transition-colors border-l-4 border-blue-500">
                            <div class="flex-shrink-0 mr-3">
                                <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-500">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </div>
                            <div>
                                <p class="text-sm text-gray-800">New order placed: <span class="font-medium">#ORD-5783</span></p>
                                <p class="text-xs text-gray-500 mt-1">1 hour ago</p>
                            </div>
                        </a>
                        
                        <!-- Notification Item -->
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-50 transition-colors border-l-4 border-yellow-500">
                            <div class="flex-shrink-0 mr-3">
                                <div class="w-10 h-10 rounded-full bg-yellow-100 flex items-center justify-center text-yellow-500">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </div>
                            </div>
                            <div>
                                <p class="text-sm text-gray-800">Low stock alert: <span class="font-medium">Organic Wheat</span></p>
                                <p class="text-xs text-gray-500 mt-1">2 hours ago</p>
                            </div>
                        </a>
                    </div>
                    
                    <div class="px-4 py-2 border-t border-gray-100 text-center">
                        <a href="#" class="text-sm text-blue-500 hover:underline">View all notifications</a>
                    </div>
                </div>
            </div>
            
            <!-- Messages Dropdown -->
            <div class="relative">
                <button class="p-2 rounded-full hover:bg-gray-100 transition-colors focus:outline-none" 
                        onclick="toggleDropdown('messagesDropdown')" title="Messages">
                    <div class="relative">
                        <i class="fas fa-envelope text-gray-600"></i>
                        <span class="absolute -top-1 -right-1 bg-blue-500 text-white text-xs rounded-full w-4 h-4 flex items-center justify-center">2</span>
                    </div>
                </button>
                
                <div id="messagesDropdown" class="absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-lg py-2 hidden z-30">
                    <div class="px-4 py-2 border-b border-gray-100">
                        <h4 class="text-sm font-semibold text-gray-700">Messages</h4>
                    </div>
                    
                    <div class="max-h-64 overflow-y-auto">
                        <!-- Message Item -->
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-50 transition-colors">
                            <div class="flex-shrink-0 mr-3">
                                <div class="w-10 h-10 rounded-full bg-gray-200">
                                    <img src="https://randomuser.me/api/portraits/men/1.jpg" class="w-10 h-10 rounded-full" alt="User Avatar">
                                </div>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-800">Vijay Kumar</p>
                                <p class="text-xs text-gray-600 truncate w-52">When will my order be delivered? I've been waiting for...</p>
                                <p class="text-xs text-gray-500 mt-1">10 minutes ago</p>
                            </div>
                        </a>
                        
                        <!-- Message Item -->
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-50 transition-colors">
                            <div class="flex-shrink-0 mr-3">
                                <div class="w-10 h-10 rounded-full bg-gray-200">
                                    <img src="https://randomuser.me/api/portraits/women/1.jpg" class="w-10 h-10 rounded-full" alt="User Avatar">
                                </div>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-800">Priya Sharma</p>
                                <p class="text-xs text-gray-600 truncate w-52">Hello, I need assistance with my retailer application...</p>
                                <p class="text-xs text-gray-500 mt-1">1 hour ago</p>
                            </div>
                        </a>
                    </div>
                    
                    <div class="px-4 py-2 border-t border-gray-100 text-center">
                        <a href="#" class="text-sm text-blue-500 hover:underline">View all messages</a>
                    </div>
                </div>
            </div>
            
            <!-- Profile Dropdown -->
            <div class="relative">
                <button class="flex items-center space-x-2 focus:outline-none" onclick="toggleDropdown('profileDropdown')">
                    <div class="w-9 h-9 rounded-full bg-green-600 flex items-center justify-center text-white">
                        <i class="fas fa-user"></i>
                    </div>
                    <span class="text-sm font-medium text-gray-700 hidden md:block">Admin</span>
                    <i class="fas fa-chevron-down text-xs text-gray-500"></i>
                </button>
                
                <div id="profileDropdown" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 hidden z-30">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        <i class="fas fa-user-circle mr-2 text-gray-500"></i> My Profile
                    </a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        <i class="fas fa-cog mr-2 text-gray-500"></i> Account Settings
                    </a>
                    <div class="border-t border-gray-100 my-1"></div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full text-left block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    // Dropdown Toggle Function
    function toggleDropdown(id) {
        const dropdown = document.getElementById(id);
        const allDropdowns = document.querySelectorAll('[id$="Dropdown"]');
        
        // Close all other dropdowns
        allDropdowns.forEach(el => {
            if (el.id !== id && !el.classList.contains('hidden')) {
                el.classList.add('hidden');
            }
        });
        
        // Toggle the selected dropdown
        dropdown.classList.toggle('hidden');
    }
    
    // Close dropdowns when clicking outside
    document.addEventListener('click', function(event) {
        const allDropdowns = document.querySelectorAll('[id$="Dropdown"]');
        const allDropdownButtons = document.querySelectorAll('button[onclick^="toggleDropdown"]');
        
        let targetIsDropdown = false;
        allDropdownButtons.forEach(button => {
            if (button.contains(event.target)) {
                targetIsDropdown = true;
            }
        });
        
        if (!targetIsDropdown) {
            allDropdowns.forEach(dropdown => {
                if (!dropdown.contains(event.target)) {
                    dropdown.classList.add('hidden');
                }
            });
        }
    });
</script> 