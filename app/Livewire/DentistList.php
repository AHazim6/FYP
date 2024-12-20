<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class DentistList extends Component
{
    use WithPagination;
    // Define properties for search and pagination
    public string $search = '';
    public int $perPage = 5;
    // This will reset pagination when the search changes
    protected $queryString = ['search', 'perPage'];

    // Method to delete a dentist (who is also a user)
    public function delete(User $user): void
    {
        // Ensure we only delete users with the "dentist" role
        if ($user->role === 'dentist') {
            $user->delete();
        }
    }
    public function applySearch(): void
    {
        // Reset pagination to the first page
        $this->resetPage();
    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        // Fetch dentists who have the 'dentist' role and apply search filter and pagination
        $dentists = User::where('role', 'dentist')
            ->where(function($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%');
            })
            ->paginate($this->perPage);

        return view('livewire.dentist-list', [
            'dentists' => $dentists
        ])->layout('layouts.app'); // Corrected placement of layout
    }
}
