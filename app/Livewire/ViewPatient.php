<?php

namespace App\Livewire;

use App\Models\Patient;
use App\Models\Appointment;
use App\Models\MedicalReport;
use Livewire\Component;

class ViewPatient extends Component
{
    public Patient $patient;
    public $patient_id;
    public $dentist_id;
    public $treatment_id;
    public $time;

    public $report;

    // Load the component with the patient information
    public function mount(Patient $patient): void
    {
        $this->patient = $patient;
    }

    public function addAppointment(): void
    {
        $this->validate([
            'dentist_id' => 'required',
            'treatment_id' => 'required',
            'time' => 'required|date',
        ]);

        Appointment::create([
            'patient_id' => $this->patient->id, // Always use the current patient's ID
            'dentist_id' => $this->dentist_id,
            'treatment_id' => $this->treatment_id,
            'time' => $this->time,
        ]);

        // Clear the input fields and refresh patient data
        $this->reset(['dentist_id', 'treatment_id', 'time']);
        $this->patient->refresh();

        session()->flash('message', 'Appointment added successfully!');
    }

    public function render()
    {
        return view('livewire.view-patient', [
            'appointments' => $this->patient->appointments()->orderBy('time', 'desc')->get(),
            'medicalReports' => $this->patient->medicalReports()->latest()->get(),
        ])->layout('layouts.app');
    }

}
