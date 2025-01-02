<div class="app-layout">
    @include('layouts.sidebar')
    <main>
        @yield('content')
    <div>
            <div class="flex justify-between items-center px-2 sm:px-4 lg:px-6max-w-7xl py-6 lg:px-8">
                <h1 class="text-2xl font-semibold mb-4">Medical Report</h1>
                {{ \Carbon\Carbon::now()->setTimezone('Asia/Kuala_Lumpur')->format('h:i A - d F, Y') }}
            </div>
        <!-- Patient Details -->
        <div class="bg-white p-4 rounded shadow-md border">
            <div class="flex justify-between items-center mb-2">
                <h2 class="text-lg font-semibold">Patient Name: {{ $patient->name }}</h2>

            </div>
            <div class="border-t pt-2">
                <p><strong>Contact No.:</strong> {{ $patient->phone }}</p>
                <p><strong>Address:</strong> {{ $patient->address }}</p>
                <p><strong>Parent Name:</strong> {{ $patient->parent_name ?? 'N/A' }}</p>
                <p><strong>Age:</strong> {{ $patient->age }}</p>
            </div>
        </div>
        <!-- Appointments -->
        <div class="mt-8 overflow-x-auto">
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
                <tbody>
                @forelse($appointments as $appointment)
                    <tr>
                        <td class="px-4 py-2 border text-center">{{ $appointment->patient->name ?? 'N/A' }}</td>
                        <td class="px-4 py-2 border text-center">{{ $appointment->dentist->name ?? 'N/A' }}</td>
                        <td class="px-4 py-2 border text-center">{{ $appointment->treatment->name ?? 'N/A' }}</td>
                        <td class="px-4 py-2 border text-center">{{ $appointment->time }}</td>
                        <td class="px-4 py-2 border text-center">
                            <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this appointment?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-2 border text-center text-gray-500">
                            No appointments found.
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        <!-- Continuation Reports -->
            <div class="mt-8 flex items-center justify-between mb-4">

                <h1 class="header-font text-lg font-bold">Continuation Medical Report</h1>

                <a href="{{ route('medicalReports') }}?patient_id={{ $patient->id }}" class="px-4 py-2 bg-blue-600 text-white rounded">
                    Add Report
                </a>
            </div>
            <table class="w-full text-sm text-left border-collapse border border-gray-300">
                <thead class="bg-gray-100 border-b border-gray-300">
                <tr>
                    <th class="px-4 py-2 border text-center">Date</th>
                    <th class="px-4 py-2 border text-center">Treatment</th>
                    <th class="px-4 py-2 border text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($medicalReports as $report)
                    <tr>
                        <td class="px-4 py-2 border text-center">{{ $report->created_at->format('Y-m-d') }}</td>
                        <td class="px-4 py-2 border text-center">
                            {{ $report->treatment->name ?? 'N/A' }}
                        </td>
                        <td class="px-4 py-2 border">
                            <div class="flex space-x-2">
                                <!-- View Button -->
                                <a
                                    href="{{ route('medicalReports.view', $report->id) }}?patient_id={{ $patient->id }}"
                                    class="px-3 py-1 bg-green-500 text-white rounded-md hover:bg-green-600">
                                    View
                                </a>
                                <!-- Delete Button -->
                                <form action="{{ route('medicalReports.destroy', $report->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this report?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-4 py-2 border text-center text-gray-500">
                            No medical reports found.
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
    </main>
</div>

