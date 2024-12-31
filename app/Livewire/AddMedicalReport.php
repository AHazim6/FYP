<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Treatment;

class AddMedicalReport extends Component
{
    public $report = '';
    public $patient;
    public $patientId;
    public $treatment_id;
    public $treatments;

    public function mount(Request $request)
    {
        $this->patientId = $request->query('patient_id');
        $this->patient = Patient::findOrFail($this->patientId);
        $this->treatments = Treatment::all(); // Fetch treatments
    }

    public function save(): void
    {
        $this->validate([
            'treatment_id' => 'required|exists:treatments,id',
            'report' => 'required|string|max:1000',
        ]);

        try {
            $this->patient->medicalReports()->create([
                'treatment_id' => $this->treatment_id,
                'report_details' => $this->report,
                'created_by' => auth()->id(),
            ]);

            session()->flash('message', 'Medical report added successfully!');
            $this->report = '';
            $this->treatment_id = null;
            $this->patient->refresh();
        } catch (\Exception $e) {
            \Log::error('Error adding medical report: ' . $e->getMessage());
            session()->flash('error', 'An error occurred while adding the medical report.');
        }
    }

    public function render()
    {
        $treatments = Treatment::all();
        return view('livewire.add-medical-report', compact('treatments'))->layout('layouts.app');
    }
}
