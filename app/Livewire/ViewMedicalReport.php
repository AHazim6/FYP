<?php

namespace App\Livewire;

use App\Models\MedicalReport;
use Livewire\Component;

class ViewMedicalReport extends Component
{
    public $report;


    public function mount($report)
    {
        $this->report = MedicalReport::findOrFail($report);
    }

    public function render()
    {
        return view('livewire.view-medical-report', [
            'report' => $this->report,
        ])->layout('layouts.app');
    }
}
