<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Appointment;
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
            'appointments' => $this->patient->appointments->sortByDesc('time'),
        ])->layout('layouts.app');
    }
}
