<div class="app-layout">
    @include('layouts.sidebar')
    <main>
        @yield('content')
        <div class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-75">
            <div class="bg-white p-6 rounded shadow-md w-1/2 relative">
                <!-- Close Button (X) -->
                <button
                    class="absolute top-2 right-2 text-gray-600 hover:text-gray-800 text-xl font-bold"
                    onclick="window.history.back();">
                    &times;
                </button>

                <h2 class="text-lg font-bold mb-4">Add Appointment</h2>
                <form wire:submit.prevent="save">

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="patient">Patient</label>
                            <select wire:model="patient_id" id="patient" class="form-control">
                                <option value="">Select Patient</option>
                                @forelse($patients as $patient)
                                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                                @empty
                                    <option value="">No Patients Available</option>
                                @endforelse
                                @error('patient_id') <span class="text-red-500">{{ $message }}</span> @enderror
                            </select>
                        </div>

                        <div>
                            <label for="dentist">Dentist</label>
                            <select wire:model="dentist_id" id="dentist" class="form-control">
                                <option value="">Select Dentist</option>
                                @forelse($dentists as $dentist)
                                    <option value="{{ $dentist->id }}">{{ $dentist->name }}</option>
                                @empty
                                    <option value="">No Dentists Available</option>
                                @endforelse
                                @error('dentist_id') <span class="text-red-500">{{ $message }}</span> @enderror
                            </select>
                        </div>

                        <div>
                            <label for="time">Appointment Time</label>
                            <input type="datetime-local" wire:model="time" id="time" class="form-control">
                            @error('time') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label for="treatment">Treatment</label>
                            <select wire:model="treatment_id" id="treatment" class="form-control">
                                <option value="">Select Treatment</option>
                                @forelse($treatments as $treatment)
                                    <option value="{{ $treatment->id }}">{{ $treatment->name }}</option>
                                @empty
                                    <option value="">No Treatments Available</option>
                                @endforelse
                                @error('treatment_id') <span class="text-red-500">{{ $message }}</span> @enderror
                            </select>
                        </div>
                    </div>

                    <div class="mt-4 flex justify-end gap-2">
                        <!-- Close Button -->
                        <button
                            type="button"
                            class="bg-red-600 text-white px-4 py-2 rounded"
                            onclick="window.history.back();">
                            Close
                        </button>
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">
                            Add Appointment
                        </button>
                    </div>
                </form>

                <!-- Success message -->
                @if (session()->has('message'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>
    </main>
</div>
