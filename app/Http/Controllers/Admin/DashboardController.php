<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // In a real app, you would fetch dashboard data here
        // For this UI-only version, we just return the view
        return view('admin.dashboard');
    }
} 