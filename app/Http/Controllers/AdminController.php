<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Show login page
     *
     * @return \Illuminate\View\View
     */
    public function login(Request $request)
    {
        // Just showing the dashboard UI for demo purposes - no actual authentication
        if ($request->isMethod('post')) {
            return redirect()->route('admin.dashboard');
        }
        
        return view('admin.login');
    }

    /**
     * Show registration page
     *
     * @return \Illuminate\View\View
     */
    public function register(Request $request)
    {
        // Just showing the dashboard UI for demo purposes - no actual registration
        if ($request->isMethod('post')) {
            return redirect()->route('admin.dashboard');
        }
        
        return view('admin.register');
    }

    /**
     * Logout (just redirects to login)
     *
     * @return \Illuminate\View\View
     */
    public function logout(Request $request)
    {
        return redirect('/');
    }

    /**
     * Show forgot password form
     *
     * @return \Illuminate\View\View
     */
    public function showForgotPasswordForm()
    {
        return view('admin.forgot-password');
    }

    /**
     * Show reset form
     *
     * @return \Illuminate\View\View
     */
    public function showResetForm(Request $request)
    {
        $token = $request->route()->parameter('token');
        $email = $request->email ?? 'admin@example.com';
        
        return view('admin.reset-password', [
            'token' => $token,
            'email' => $email
        ]);
    }

    /**
     * Send reset link (just shows success message)
     *
     * @return \Illuminate\View\View
     */
    public function sendResetLink(Request $request)
    {
        return back()->with(['status' => 'Password reset link sent successfully!']);
    }

    /**
     * Reset password (just redirects with success message)
     *
     * @return \Illuminate\View\View
     */
    public function resetPassword(Request $request)
    {
        return redirect()->route('admin.login')->with('status', 'Password has been reset successfully!');
    }

    /*
     * Dashboard Methods
     */

    /**
     * Display farmers index
     *
     * @return \Illuminate\View\View
     */
    public function farmerIndex()
    {
        return view('admin.farmers.index');
    }

    /**
     * Show farmer create form
     *
     * @return \Illuminate\View\View
     */
    public function farmerCreate()
    {
        return view('admin.farmers.create');
    }

    /**
     * Store new farmer (just redirects)
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function farmerStore(Request $request)
    {
        return redirect()->route('admin.farmers.index')->with('success', 'Farmer created successfully!');
    }

    /**
     * Show farmer edit form
     *
     * @return \Illuminate\View\View
     */
    public function farmerEdit($id)
    {
        return view('admin.farmers.edit', compact('id'));
    }

    /**
     * Update farmer (just redirects)
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function farmerUpdate(Request $request, $id)
    {
        return redirect()->route('admin.farmers.index')->with('success', 'Farmer updated successfully!');
    }

    /**
     * Delete farmer (just redirects)
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function farmerDestroy($id)
    {
        return redirect()->route('admin.farmers.index')->with('success', 'Farmer deleted successfully!');
    }

    /**
     * Display verified farmers
     *
     * @return \Illuminate\View\View
     */
    public function verifiedFarmers()
    {
        return view('admin.farmers.verified');
    }

    /*
     * Retailer Management Methods
     */

    /**
     * Display retailers index
     *
     * @return \Illuminate\View\View
     */
    public function retailerIndex()
    {
        return view('admin.retailers.index');
    }

    /**
     * Show retailer create form
     *
     * @return \Illuminate\View\View
     */
    public function retailerCreate()
    {
        return view('admin.retailers.create');
    }

    /**
     * Store new retailer (just redirects)
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function retailerStore(Request $request)
    {
        return redirect()->route('admin.retailers.index')->with('success', 'Retailer created successfully!');
    }

    /**
     * Show retailer edit form
     *
     * @return \Illuminate\View\View
     */
    public function retailerEdit($id)
    {
        return view('admin.retailers.edit', compact('id'));
    }

    /**
     * Update retailer (just redirects)
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function retailerUpdate(Request $request, $id)
    {
        return redirect()->route('admin.retailers.index')->with('success', 'Retailer updated successfully!');
    }

    /**
     * Delete retailer (just redirects)
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function retailerDestroy($id)
    {
        return redirect()->route('admin.retailers.index')->with('success', 'Retailer deleted successfully!');
    }

    /**
     * Display verified retailers
     *
     * @return \Illuminate\View\View
     */
    public function verifiedRetailers()
    {
        return view('admin.retailers.verified');
    }

    /*
     * Product Management Methods
     */

    /**
     * Display products index
     *
     * @return \Illuminate\View\View
     */
    public function productIndex()
    {
        return view('admin.products.index');
    }

    /**
     * Show product create form
     *
     * @return \Illuminate\View\View
     */
    public function productCreate()
    {
        return view('admin.products.create');
    }

    /**
     * Store new product (just redirects)
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function productStore(Request $request)
    {
        return redirect()->route('admin.products.index')->with('success', 'Product created successfully!');
    }

    /**
     * Show product edit form
     *
     * @return \Illuminate\View\View
     */
    public function productEdit($id)
    {
        return view('admin.products.edit', compact('id'));
    }

    /**
     * Update product (just redirects)
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function productUpdate(Request $request, $id)
    {
        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Delete product (just redirects)
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function productDestroy($id)
    {
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully!');
    }

    /**
     * Display product categories
     *
     * @return \Illuminate\View\View
     */
    public function productCategories()
    {
        return view('admin.products.categories');
    }

    /*
     * Other Admin Methods
     */

    /**
     * Display orders
     *
     * @return \Illuminate\View\View
     */
    public function orders()
    {
        return view('admin.orders');
    }

    /**
     * Display settings
     *
     * @return \Illuminate\View\View
     */
    public function settings()
    {
        return view('admin.settings');
    }

    /**
     * Display reports
     *
     * @return \Illuminate\View\View
     */
    public function reports()
    {
        return view('admin.reports');
    }
} 