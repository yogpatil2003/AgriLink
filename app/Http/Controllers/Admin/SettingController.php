<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display the settings page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // In a real app, you would fetch settings data from the database
        // For this UI-only version, we just return the view
        return view('admin.settings');
    }
} 