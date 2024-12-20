<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\RedirectResponse;

class AppointmentController extends Controller
{
    public function destroy($id): RedirectResponse
    {
        $appointment = Appointment::find($id);

        if ($appointment) {
            $appointment->delete();
            return redirect()->route('dashboard')->with('message', 'Appointment deleted successfully!');
        }

        return redirect()->route('dashboard')->with('error', 'Appointment not found!');
    }
}
