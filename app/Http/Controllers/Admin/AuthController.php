<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('admin.login');
    }

    /**
     * Handle the login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        // In a real app, authentication would happen here
        // For this UI-only version, we just redirect to dashboard
        return redirect()->route('admin.dashboard');
    }

    /**
     * Handle the logout request.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        // In a real app, logout would happen here
        return redirect()->route('admin.login');
    }
} 