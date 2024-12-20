<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Treatment;


class AppointmentForm extends Component
{
    public $patients;
    public $dentists;
    public $treatments;
    public $patient_id;
    public $dentist_id;
    public $treatment_id;
    public $time;

    public function mount(): void
    {

        // Fetch dropdown data
        $this->patients = Patient::all();
        $this->dentists = User::where('role', 'dentist')->get();
        $this->treatments = Treatment::all();

    }

    public function save(): void
    {
        $this->validate([
            'patient_id' => 'required|exists:patients,id',
            'dentist_id' => 'required|exists:users,id',
            'treatment_id' => 'required|exists:treatments,id',
            'time' => 'required|date',
        ]);

        Appointment::create([
            'patient_id' => $this->patient_id,
            'dentist_id' => $this->dentist_id,
            'treatment_id' => $this->treatment_id,
            'time' => $this->time,
        ]);

        // Send success message
        session()->flash('message', 'Appointments added successfully!');
        // Redirect back to the referring page
    }

    public function render()
    {
        return view('livewire.appointment-form', [
            'appointments' => Appointment::with(['patient', 'dentist', 'treatment'])->get(),
        ])->layout('layouts.app');
    }

}

