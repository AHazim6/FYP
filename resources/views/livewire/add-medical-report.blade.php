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
                <!-- New Medical Report Form -->
                <h2 class="text-xl font-semibold mt-6">Add New Medical Report</h2>
                @if (session()->has('message'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('message') }}
                    </div>
                @endif

                <form wire:submit.prevent="save">
                    <!-- Treatment Dropdown -->
                    <div class="mt-8">
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
                    <div class="mt-8">
                        <label for="report">Treatment Report</label>
                        <textarea id="report" wire:model="report" rows="4" class="bg-gray-50 border border-gray-300 rounded-lg w-full"></textarea>
                        @error('report') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-8">
                        <label for="simplified_report">Simplified Treatment Report</label>
                        <textarea id="simplified_report" wire:model="simplified_report" rows="4" class="bg-gray-50 border border-gray-300 rounded-lg w-full"></textarea>
                        @error('simplified_report') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex justify-end gap-2">
                        <!-- Close Button -->
                        <button
                            type="button"
                            class="bg-red-600 text-white px-4 py-2 rounded"
                            onclick="window.history.back();">
                            Close
                        </button>
                        <!-- Add Report Button -->
                        <button type="submit"
                                wire:click="$refresh"
                                class="bg-blue-500 text-white px-4 py-2 rounded">
                                Add Report
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>

