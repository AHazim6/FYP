<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Patient;

class ChildView extends Component
{
    public $patient;

    public function mount(Patient $patient)
    {
        // Load the patient and their appointments
        $this->patient = $patient;
    }

    public function render()
    {
        return view('livewire.child-view', [
            'appointments' => $this->patient->appointments->sortByDesc('time'), // Sort appointments by time
            'medicalReports' => $this->patient->medicalReports->sortByDesc('created_at'), // Sort medical reports by creation date
        ])->layout('layouts.app');
    }
}
