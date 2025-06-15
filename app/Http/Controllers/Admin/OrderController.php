<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of orders.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // In a real app, you would fetch orders from the database
        // For this UI-only version, we just return the view
        return view('admin.orders');
    }
} 