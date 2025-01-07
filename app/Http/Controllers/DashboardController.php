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
        // Fetch all dentists
        $dentists = User::where('role', 'dentist')->get();

        // Fetch appointments and sort them by time (latest first)
        $appointments = Appointment::with(['patient', 'dentist', 'treatment'])
            ->orderBy('time', 'desc')
            ->get();

        // Count totals
        $totalDentists = User::where('role', 'dentist')->count();
        $totalPatients = Patient::count();
        $totalAppointments = Appointment::count();

        // Return view with data
        return view('dashboard', compact(
            'dentists',
            'totalDentists',
            'totalPatients',
            'totalAppointments',
            'appointments'
        ));
    }

    public function edit(): void
    {
        $this->showEditModal = True;
    }
}
