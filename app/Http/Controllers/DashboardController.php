<?php

namespace App\Http\Controllers;

use App\Models\Academia;

class DashboardController extends Controller
{
    public function index()
    {
        $academia = Academia::first(); // pega a academia configurada
        return view('dashboard', compact('academia'));
    }
}
