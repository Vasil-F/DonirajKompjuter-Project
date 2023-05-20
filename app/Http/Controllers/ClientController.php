<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $applications = Application::where('has_donation', true)->whereIn('status', ['new','complete'])->get();
        
        return view('clients.index', compact('applications'));
    }
}
