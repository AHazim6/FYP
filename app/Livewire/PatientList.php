<?php

namespace App\Livewire;

use App\Models\Patient;
use Livewire\Component;
use Livewire\WithPagination;

class PatientList extends Component
{
    use WithPagination;

    public $search = ''; // Search input field
    public $perPage = 5; // Items per page

    protected $queryString = ['search', 'perPage'];

    public function applySearch(): void
    {
        // Reset pagination to the first page
        $this->resetPage();
    }

    public function delete(Patient $patient): void
    {
        $patient->delete();
    }

    public function toggleConsentForm($id): void
    {
        $patient = Patient::find($id);
        $patient->update(['consent_form' => !$patient->consent_form]);
    }

    public function toggleMedicalHistoryForm($id): void
    {
        $patient = Patient::find($id);
        $patient->update(['medical_history_form' => !$patient->medical_history_form]);
    }

    public function render()
    {
        $patients = Patient::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('ic', 'like', '%' . $this->search . '%');
            })
            ->paginate($this->perPage);

        return view('livewire.patient-list', compact('patients'))->layout('layouts.app');
    }

}
