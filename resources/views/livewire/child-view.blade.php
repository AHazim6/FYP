<div class="app-layout">
    @include('parent.sidebar')
    <main>
        @yield('content')
        <div>
            <div class="flex justify-between items-center px-2 sm:px-4 lg:px-6max-w-7xl py-6 lg:px-8">
                <h1 class="text-2xl font-semibold mb-4">{{ $patient->name }}'s Medical Records</h1>
                {{ \Carbon\Carbon::now()->setTimezone('Asia/Kuala_Lumpur')->format('h:i A - d F, Y') }}
            </div>
            <!-- Appointments Section -->
            <div class="mt-8">
                <h2 class="text-lg font-bold mb-2">Appointments</h2>
                <table class="w-full text-sm border-collapse border border-gray-300">
                    <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="px-4 py-2 border text-center">Date</th>
                        <th class="px-4 py-2 border text-center">Dentist</th>
                        <th class="px-4 py-2 border text-center">Treatment</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($appointments as $appointment)
                        <tr>
                            <td class="px-4 py-2 border text-center">{{ $appointment->time }}</td>
                            <td class="px-4 py-2 border text-center">{{ $appointment->dentist->name ?? 'N/A' }}</td>
                            <td class="px-4 py-2 border text-center">{{ $appointment->treatment->name ?? 'N/A' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="px-4 py-2 border text-center text-gray-500">
                                No appointments found.
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
            <!-- Medical Reports Section -->
            <div class="mt-8">
                <h2 class="text-lg font-bold mb-2">Medical Records</h2>
                <table class="w-full text-sm border-collapse border border-gray-300">
                    <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="px-4 py-2 border text-center">Date</th>
                        <th class="px-4 py-2 border text-center">Treatment</th>
                        <th class="px-4 py-2 border text-center">Simplified Treatment Report</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($medicalReports as $report)
                        <tr>
                            <td class="px-4 py-2 border text-center">{{ $report->created_at->format('Y-m-d') }}</td>
                            <td class="px-4 py-2 border text-center">{{ $report->treatment->name ?? 'N/A' }}</td>
                            <td class="px-4 py-2 border text-center">{{ $report->simplified_report ?? 'N/A' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-2 border text-center text-gray-500">
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
