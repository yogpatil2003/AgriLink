<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // In a real app, you would fetch products from the database
        // For this UI-only version, we just return the view
        return view('admin.products.index');
    }
} 