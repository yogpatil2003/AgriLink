<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Welcome/Login Page
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Admin Routes - No Authentication Required (UI Only)
Route::prefix('admin')->name('admin.')->group(function () {
    // Login page
        Route::get('/login', function () {
            return view('admin.login');
        })->name('login');
        
    // Registration page
        Route::get('/register', function () {
            return view('admin.register');
        })->name('register');
        
        // Password reset
    Route::get('/forgot-password', function () {
        return view('admin.forgot-password');
    })->name('password.request');
    
    Route::get('/reset-password', function () {
        return view('admin.reset-password');
    })->name('password.reset');
    
    // Dashboard - Direct access (no auth)
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');
        
    // Other pages - Direct access (no auth)
    Route::get('/farmers', function () {
        return view('admin.farmers.index');
    })->name('farmers.index');
    
    Route::get('/farmers/profile', function () {
        return view('admin.farmers.profile');
    })->name('farmers.profile');
    
    Route::get('/farmers/product-bids', function () {
        return view('admin.farmers.product_bids');
    })->name('farmers.product_bids');
    
    Route::get('/retailers', function () {
        return view('admin.retailers.index');
    })->name('retailers.index');
    
    Route::get('/retailers/profile', function () {
        return view('admin.retailers.profile');
    })->name('retailers.profile');
    
    // Admin products routes
    Route::get('/products', function () { 
        return view('admin.products.index'); 
    })->name('products.index');

    Route::get('/products/view/{id}', function () { 
        return view('admin.products.view'); 
    })->name('products.view');

    // Admin categories routes
    Route::get('/categories', function () { 
        return view('admin.categories.index'); 
    })->name('admin.categories.index');

    Route::post('/categories/store', function () { 
        // This would normally handle category creation
        return redirect()->route('admin.categories.index')->with('success', 'Category added successfully');
    })->name('admin.categories.store');

    // Admin agri centers routes
    Route::get('/agricenters', function () { 
        return view('admin.agricenters.index'); 
    })->name('admin.agricenters.index');

    Route::get('/agricenters/create', function () { 
        return view('admin.agricenters.create'); 
    })->name('admin.agricenters.create');

    Route::post('/agricenters/store', function () {
        // This would normally handle agri center creation
        return redirect()->route('admin.agricenters.index')->with('success', 'Agri Center added successfully');
    })->name('admin.agricenters.store');

    Route::get('/agricenters/verified', function () { 
        return view('admin.agricenters.verified'); 
    })->name('admin.agricenters.verified');

    Route::get('/agricenters/profile/{id}', function () { 
        return view('admin.agricenters.profile'); 
    })->name('admin.agricenters.profile');
    
    
    Route::get('/settings', function () {
        return view('admin.settings');
    })->name('settings');
    
    // Add logout route
    Route::get('/logout', function () {
        return redirect()->route('admin.login');
    })->name('logout');
});
