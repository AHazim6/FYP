@include('parent.sidebar')
<x-app-layout>
    @section('content')
        <div>
            <header class="bg-white shadow">
                <div class="flex justify-between items-center px-2 sm:px-4 lg:px-6max-w-7xl py-6 lg:px-8">
                    <h1 class="header-font">Hello! {{ Auth::user()->name }} Welcome to Dentism</h1>
                    {{ \Carbon\Carbon::now()->setTimezone('Asia/Kuala_Lumpur')->format('h:i A - d F, Y') }}
                </div>
            </header>
        </div>
        <!-- My Children Table -->
        <div class="mt-8 overflow-x-auto">
            <!-- Header Row -->
            <div class="flex items-center justify-between mb-4">
                <!-- My Children Heading -->
                <h1 class="header-font text-lg font-bold">My Children</h1>
            </div>
            <!-- My Children Table -->
            <table class="w-full text-sm text-left border-collapse border border-gray-300">
                <thead class="bg-gray-100 border-b border-gray-300">
                <tr>
                    <th class="w-1/5 px-4 py-2 border text-center">Name</th>
                    <th class="w-1/5 px-4 py-2 border text-center">IC Number</th>
                    <th class="w-1/5 px-4 py-2 border text-center">Age</th>
                    <th class="w-1/5 px-4 py-2 border text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($children as $child)
                    <tr>
                        <td class="px-4 py-2 border text-center">{{ $child->name ?? 'N/A' }}</td>
                        <td class="px-4 py-2 border text-center">{{ $child->ic ?? 'N/A' }}</td>
                        <td class="px-4 py-2 border text-center">{{ $child->age ?? 'N/A' }}</td>
                        <td class="px-4 py-2 border text-center">
                            <a href="{{ route('child.show', ['patient' => $child->id]) }}"
                               class="px-3 py-1 bg-blue-500 text-white rounded">
                                View Report
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-2 border text-center text-gray-500">
                            No children found.
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
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
