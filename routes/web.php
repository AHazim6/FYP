<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ParentDashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DashboardController;
use App\Livewire\AppointmentForm;
use App\Livewire\ViewPatient;
use App\Livewire\AddDentist;
use App\Livewire\AddPatient;
use App\Livewire\DentistList;
use App\Livewire\PatientList;
use Illuminate\Support\Facades\Route;


// Public route (Welcome page)
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact-us', [ContactController::class, 'contact'])->name('contact');
Route::post('send-email', [ContactController::class, 'store'])->name('send.email');


// Dashboard route, accessible to authenticated users
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/parent/dashboard', [ParentDashboardController::class, 'index'])->name('parent.dashboard');
    Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Dentist management
    Route::get('/dentists', DentistList::class)->name('dentists.list');
    Route::get('/dentists/create', AddDentist::class)->name('dentists.add');
    // Patient management
    Route::get('/patients', PatientList::class)->name('patients.list');
    Route::get('/patients/create', AddPatient::class)->name('patients.add');
    Route::get('/patients/{patient}', ViewPatient::class)->name('patients.show');
    Route::get('/children/{patient}', \App\Livewire\ChildView::class)->name('child.show');
    Route::get('/appointments', AppointmentForm::class)->name('appointments');
});

require __DIR__.'/auth.php';
