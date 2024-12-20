<div class="app-layout">
    @include('layouts.sidebar')
    <main>
        @yield('content')
    <div>
        <div class="flex justify-between items-center px-2 sm:px-4 max-w-7xl py-4 lg:px-6">
            <h1 class="text-2xl font-semibold">Patient List</h1>
            <span>{{ \Carbon\Carbon::now()->setTimezone('Asia/Kuala_Lumpur')->format('h:i A - d F, Y') }}</span>
        </div>
        <section>
            <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                    <div class="flex items-center justify-between p-4">
                        <!-- Search Input -->
                        <div class="flex items-center justify-between mb-4">
                            <div class="block w-full">
                               <input wire:model.defer="search"
                                      wire:keydown.enter="applySearch"
                                      type="text"
                                      placeholder="Search by name or IC"
                                      class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-12 p-2"
                               />
                            </div>
                        </div>
                        <!-- Add Appointment Button -->
                        <div class="ml-4">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Add Appointment
                            </button>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-black">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th class="w-1/4 px-4 py-2 border text-center">Name</th>
                                <th class="w-1/4 px-4 py-2 border text-center">IC</th>
                                <th class="w-1/4 px-4 py-2 border text-center">Gender</th>
                                <th class="w-1/4 px-4 py-2 border text-center">Age</th>
                                <th class="w-1/4 px-4 py-2 border text-center">Consent Form</th>
                                <th class="w-1/4 px-4 py-2 border text-center">Medical History</th>
                                <th class="w-1/4 px-4 py-2 border text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($patients as $patient)
                                <tr wire:key="patient-{{ $patient->id }}" class="border-b dark:border-gray-700">
                                    <td class="px-4 py-2 border text-center">{{ $patient->name }}</td>
                                    <td class="px-4 py-2 border text-center">{{ $patient->ic }}</td>
                                    <td class="px-4 py-2 border text-center">{{ $patient->gender }}</td>
                                    <td class="px-4 py-2 border text-center">{{ $patient->age }}</td>
                                    <td class="px-4 py-2 border text-center">
                                        <input type="checkbox" wire:click="toggleConsentForm({{ $patient->id }})" {{ $patient->consent_form ? 'checked' : '' }}/>
                                    </td>
                                    <td class="px-4 py-2 border text-center">
                                        <input type="checkbox" wire:click="toggleMedicalHistoryForm({{ $patient->id }})" {{ $patient->medical_history_form ? 'checked' : '' }}/>
                                    </td>
                                    <td class="px-4 py-2 border">
                                        <div class="flex space-x-2">
                                            <!-- Delete Button -->
                                            <button onclick="confirm('Are you sure to delete {{ $patient->name }} ?') || event.stopImmediatePropagation()"
                                                    wire:click="delete({{ $patient->id }})"
                                                    class="px-3 py-1 bg-red-500 text-white rounded">
                                                X
                                            </button>
                                            <!-- View Button -->
                                            <a href="{{ route('patients.show', ['patient' => $patient->id]) }}"
                                               class="px-3 py-1 bg-blue-500 text-white rounded">
                                                View
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">No results found.</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="py-4 px-3">
                        <div class="flex justify-between">
                            <div class="flex space-x-4 items-center">
                                <label class="w-32 text-sm font-medium text-gray-900">Per Page</label>
                                <select wire:model="perPage"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                            <div class="mt-4">
                                {{ $patients->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </main>
</div>
