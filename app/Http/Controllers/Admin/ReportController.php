<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of reports.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // In a real app, you would fetch report data from the database
        // For this UI-only version, we just return the view
        return view('admin.reports');
    }
} 