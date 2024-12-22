<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParentDashboardController extends Controller
{
    public function index()
    {
        $children = Patient::where('parent_name', Auth::user()->name)->get();

        return view('parent.dashboard', compact('children'));
    }
}
