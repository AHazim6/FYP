<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request; // Keep this if you need it in future, otherwise it can be removed.

class DashboardController extends Controller
{

    public $showEditModal = False;

    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        // Fetch all dentists and count other items
        $dentists = User::where('role', 'dentist')->get();  // Fetch all users with the role of dentist

        // Fetch appointments
        $appointments = Appointment::with(['patient', 'dentist', 'treatment'])->get();

        // You can also add additional data like counts for Patients and Appointments if needed
        $totalDentists = User::where('role', 'dentist')->count(); // Count all dentists
        $totalPatients = Patient::count();
        $totalAppointments = Appointment::count();

        // Return view with data
        return view('dashboard', compact('dentists', 'totalDentists', 'totalPatients', 'totalAppointments','appointments'));
    }
    public function edit(): void
    {
        $this->showEditModal = True;
    }
}
