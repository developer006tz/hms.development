<?php

namespace App\Http\Controllers\Receptionist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $data = [];
    public function __construct()
    {
        // $this->middleware(['auth', 'receptionist']);
    }
    public function index()
    {
        return view('dashboards.receptionist.dashboard');
    }

    public function add_patient()
    {
        $this->data['blood_groups'] = \App\Models\BloodGroup::all();
        $this->data['departments'] = \App\Models\Department::all();
        $this->data['countries'] = \App\Models\Countries::all();
        return view('dashboards.receptionist.patient_add', $this->data);
    }

    public function list_patient()
    {
        return view('dashboards.receptionist.patient_list');
    }

    public function add_appointment()
    {
        return view('dashboards.receptionist.appointment_add');
    }

    public function list_appointment()
    {
        return view('dashboards.receptionist.appointment_list');
    }

    public function list_doctors_by_schedule()
    {
        return view('dashboards.receptionist.doctors_on_duty');
    }

    public function list_doctors()
    {
        return view('dashboards.receptionist.doctors_list');
    }

    public function department_list()
    {
        return view('dashboards.receptionist.department_list');
    }
}
