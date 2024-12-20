<?php

namespace App\Livewire;

use Illuminate\Validation\ValidationException;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AddDentist extends Component
{
    // Declare public variables for form fields
    public $name, $email, $contact, $password, $password_confirmation;

    // Validation rules
    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:Users,email',
        'contact' => 'required|string|max:15',
        'password' => 'required|string|min:8',
    ];

    // Real-time validation for each field when updated

    /**
     * @throws ValidationException
     */
    public function updated($propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    // Method to handle form submission and add a new dentist
    public function save(): void
    {
        // Validate the form data
        $this->validate();

        // Create the new dentist
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'contact' => $this->contact,
            'password' => Hash::make($this->password),
            'role' => 'dentist', // Assign the role as dentist
        ]);

        // Clear the form inputs
        $this->reset(['name', 'email', 'contact', 'password', 'password_confirmation']);

        // Send success message
        session()->flash('message', 'Dentist added successfully!');
    }

    // Render the component with the specified layout
    public function render()
    {
        return view('livewire.dentist-add')
            ->layout('layouts.app'); // Use the correct layout here
    }
}
