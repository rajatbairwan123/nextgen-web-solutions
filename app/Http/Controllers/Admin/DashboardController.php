<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Contact;

class DashboardController extends Controller
{
    public function index()
    {
        $totalServices = Service::count();
        $totalProjects = 0; // will update later when portfolio added
        $totalContacts = Contact::count();

        return view('admin.dashboard', compact(
            'totalServices',
            'totalProjects',
            'totalContacts'
        ));
    }
}