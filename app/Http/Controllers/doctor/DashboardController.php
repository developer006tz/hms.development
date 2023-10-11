<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function showDashboard()
    {
        return view('dashboards.doctor.dashboard');
    }

    public function showDoctorProfile()
    {
        return view('dashboards.doctor.profile');
    }
}
