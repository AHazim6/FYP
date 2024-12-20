<?php

namespace App\Livewire;

use Illuminate\Validation\ValidationException;
use Livewire\Component;
use App\Models\Patient;

class AddPatient extends Component
{
    // Declare public variables for form fields
    public $name, $parent_name, $ic, $gender, $age, $phone, $address;

    // Validation rules
    protected array $rules = [
        'name' => 'required|string|max:255',
        'ic' => 'required|string|max:12|unique:patients,ic',
        'gender' => 'required|string|max:12',
        'age' => 'required|integer',
        'phone' => 'required|max:15',  // Add phone validation
        'address' => 'required|max:255', // Add address validation
        'parent_name' => 'required|string|max:255',
    ];

    // Real-time validation for each field when updated

    /**
     * @throws ValidationException
     */

    // Method to handle form submission and add a new patient
    public function save(): void
    {
        $this->validate();


        Patient::create([
            'name' => $this->name,
            'ic' => $this->ic,
            'gender' => $this->gender,
            'age' => $this->age,
            'phone' => $this->phone, // Add phone
            'address' => $this->address, // Add address
            'parent_name' => $this->parent_name,
        ]);

        // Reset fields after saving
        $this->reset(['name', 'ic', 'gender', 'age', 'parent_name', 'phone', 'address']);
        session()->flash('message', 'Patient added successfully.');
    }


    // Render the component with the specified layout
    public function render()
    {
        return view('livewire.patient-add')
            ->layout('layouts.app'); // Use the correct layout here
    }
}
