@include('layouts.sidebar')
<x-app-layout>
    @section('content')
        <div>
                <header class="bg-white shadow">
                        <div class="flex justify-between items-center px-2 sm:px-4 lg:px-6max-w-7xl py-6 lg:px-8">
                            <h1 class="header-font">Welcome, Dr {{ Auth::user()->name }}</h1>
                            {{ \Carbon\Carbon::now()->setTimezone('Asia/Kuala_Lumpur')->format('h:i A - d F, Y') }}
                        </div>
                </header>

            <div class="container-fluid">
                <div class="flex justify-between items-center px-2 sm:px-4 py-6 max-w-7xl">
                    <!-- Total Dentist -->
                    <div>
                        <div class="card text-center bg-gray-300">
                            <div class="card-body">
                                <h5 class="card-title">Total Dentist</h5>
                                <p class="card-text display-number">{{ \App\Models\User::where('role', 'dentist')->count() }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Total Patient -->
                    <div>
                        <div class="card text-center bg-gray-300">
                            <div class="card-body">
                                <h5 class="card-title">Total Patient</h5>
                                <p class="card-text display-number">{{ \App\Models\Patient::count() }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Appointments -->
                    <div>
                        <div class="card text-center bg-gray-300">
                            <div class="card-body">
                                <h5 class="card-title">Appointments</h5>
                                <p class="card-text display-number">{{ \App\Models\Appointment::count() }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Appointments -->
                <div class="overflow-x-auto">
                    <!-- Header Row -->
                    <div class="flex items-center justify-between mb-4">
                        <!-- Appointments List Heading -->
                        <h1 class="header-font text-lg font-bold">Appointments List</h1>
                        <!-- Add Appointment Button -->
                        <a href="{{ route('appointments') }}" class="px-4 py-2 bg-blue-600 text-white rounded">
                            Add Appointment
                        </a>
                    </div>
                    <!-- Appointments Table -->
                    <div class="mb-4">
                        <!-- Search Bar -->
                        <input
                            type="text"
                            id="search"
                            placeholder="Search appointments..."
                            class="px-4 py-2 border rounded-md w-1/2"
                            oninput="filterTable()"
                        >
                    </div>

                    <table class="w-full text-sm text-left text-gray-500 dark:text-black">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th class="w-1/5 px-4 py-2 border text-center">Patient</th>
                            <th class="w-1/5 px-4 py-2 border text-center">Dentist</th>
                            <th class="w-1/5 px-4 py-2 border text-center">Treatment</th>
                            <th class="w-1/5 px-4 py-2 border text-center">Time</th>
                            <th class="w-1/5 px-4 py-2 border text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody id="appointmentsTable">
                        @forelse($appointments as $appointment)
                            @if(auth()->user()->role === 'admin' || (auth()->user()->role === 'dentist' && $appointment->dentist_id === auth()->user()->id))
                                <tr>
                                    <td class="px-4 py-2 border text-center">{{ $appointment->patient->name ?? 'N/A' }}</td>
                                    <td class="px-4 py-2 border text-center">{{ $appointment->dentist->name ?? 'N/A' }}</td>
                                    <td class="px-4 py-2 border text-center">{{ $appointment->treatment->name ?? 'N/A' }}</td>
                                    <td class="px-4 py-2 border text-center">
                                        {{ \Carbon\Carbon::parse($appointment->time)->format('d/m/Y H:i') }}
                                    </td>
                                    <td class="px-4 py-2 border text-center">
                                        <!-- Delete Button -->
                                        <form
                                            action="{{ route('appointments.destroy', $appointment->id) }}"
                                            method="POST"
                                            class="inline"
                                            onsubmit="return confirm('Are you sure you want to delete this appointment?');"
                                        >
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @empty
                            <tr>
                                <td colspan="6" class="px-4 py-2 border text-center text-gray-500">
                                    No appointments found.
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>

                    <!-- JavaScript for Search Filtering -->
                    <script>
                        function filterTable() {
                            const searchInput = document.getElementById('search').value.toLowerCase();
                            const rows = document.querySelectorAll('#appointmentsTable tr');

                            rows.forEach(row => {
                                const cells = row.querySelectorAll('td');
                                const rowText = Array.from(cells).map(cell => cell.textContent.toLowerCase()).join(' ');
                                row.style.display = rowText.includes(searchInput) ? '' : 'none';
                            });
                        }
                    </script>

                </div>

            </div>
        </div>
    @endsection


    <!-- CSS styling to add grey background and modify number display -->
    <style>
        .bg-light-grey {
            background-color: #f0f0f0; /* Light grey background */
        }

        .card {
            border: none; /* Remove default border for cleaner look */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional shadow for depth */
        }

        .card-title {
            font-weight: bold;
            font-size: 16px; /* Slightly larger titles */
            margin-bottom: 5px;
        }

        .header-font{
            font-weight: normal;
            font-size: 20px;
        }

        .card-text.display-number {
            font-size: 1.5rem; /* Bigger number display */
            font-weight: bold;
            margin: 0;
        }

        .card-body {
            padding: 10px; /* Add padding for spacing */
        }
        .fixed {
            position: fixed;
            inset: 0;
        }

        .bg-opacity-50 {
            background-color: rgba(0, 0, 0, 0.5);
        }

        .z-50 {
            z-index: 50;
        }


    </style>
</x-app-layout>
