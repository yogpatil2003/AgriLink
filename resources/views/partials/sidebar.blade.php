<!-- Sidebar -->
<aside class="sidebar text-white">
    <div class="p-5 mb-6">
        <div class="flex items-center space-x-3">
            <img src="{{asset('img/logo.jpg')}}" alt="AgriLink Logo" class="w-10 h-10">
            <h1 class="text-xl font-bold">AgriLink</h1>
        </div>
        <p class="text-xs text-gray-200 mt-1">Admin Dashboard</p>
    </div>
    
    <nav class="px-3 py-2">
        <p class="text-xs text-gray-200 mb-3 px-3 uppercase">Main</p>
        
        <a href="{{ url('/admin/dashboard') }}" class="sidebar-link {{ request()->is('admin/dashboard*') ? 'active' : '' }} flex items-center space-x-3 px-3 py-3 rounded-md mb-1">
            <i class="fas fa-tachometer-alt w-5 text-center"></i>
            <span>Dashboard</span>
        </a>
        
        <p class="text-xs text-gray-200 my-3 px-3 uppercase">Management</p>
        
        <a href="{{ url('/admin/farmers') }}" class="sidebar-link {{ request()->is('admin/farmers*') ? 'active' : '' }} flex items-center space-x-3 px-3 py-3 rounded-md mb-1">
            <i class="fas fa-tractor w-5 text-center"></i>
            <span>Farmers</span>
        </a>
        
        <a href="{{ url('/admin/retailers') }}" class="sidebar-link {{ request()->is('admin/retailers*') ? 'active' : '' }} flex items-center space-x-3 px-3 py-3 rounded-md mb-1">
            <i class="fas fa-store w-5 text-center"></i>
            <span>Retailers</span>
        </a>
        
        <a href="{{ url('/admin/products') }}" class="sidebar-link {{ request()->is('admin/products*') ? 'active' : '' }} flex items-center space-x-3 px-3 py-3 rounded-md mb-1">
            <i class="fas fa-carrot w-5 text-center"></i>
            <span>Products</span>
        </a>
        
        <a href="{{ url('/admin/categories') }}" class="sidebar-link {{ request()->is('admin/categories*') ? 'active' : '' }} flex items-center space-x-3 px-3 py-3 rounded-md mb-1">
            <i class="fas fa-list w-5 text-center"></i>
            <span>Categories</span>
        </a>

        <a href="{{ url('/admin/agricenters') }}" class="sidebar-link {{ request()->is('admin/agricenters*') ? 'active' : '' }} flex items-center space-x-3 px-3 py-3 rounded-md mb-1">
            <i class="fas fa-warehouse w-5 text-center"></i>
            <span>Agricenters</span>
        </a>
        
        <p class="text-xs text-gray-200 my-3 px-3 uppercase">Settings</p>
        
        <a href="{{ url('/admin/settings') }}" class="sidebar-link {{ request()->is('admin/settings*') ? 'active' : '' }} flex items-center space-x-3 px-3 py-3 rounded-md mb-1">
            <i class="fas fa-cog w-5 text-center"></i>
            <span>Settings</span>
        </a>
        
        <a href="{{ url('/admin/logout') }}" class="sidebar-link flex items-center space-x-3 px-3 py-3 rounded-md mb-1 mt-6">
            <i class="fas fa-sign-out-alt w-5 text-center"></i>
            <span>Logout</span>
        </a>
    </nav>
</aside>

<!-- Sidebar Styles -->
<style>
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
    
    .main-content {
        margin-left: 280px;
    }
</style>
