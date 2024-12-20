<div class="app-layout">
    @include('layouts.sidebar')
    <main>
        @yield('content')
    <div class="flex justify-between items-center px-2 sm:px-4 max-w-7xl py-6 lg:px-8">
        <h1 class="text-2xl font-semibold">Add New Patient</h1>
        <span>{{ \Carbon\Carbon::now()->setTimezone('Asia/Kuala_Lumpur')->format('h:i A - d F, Y') }}</span>
    </div>
    <section>
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="p-6">
                    <form wire:submit.prevent="save">
                        <!-- Name -->
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input wire:model="name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <!-- Parent Name -->
                        <div class="mb-4">
                            <label for="parent_name" class="block text-sm font-medium text-gray-700">Parent Name</label>
                            <input wire:model="parent_name" type="text" id="parent_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                            @error('parent_name') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <!-- IC -->
                        <div class="mb-4">
                            <label for="ic" class="block text-sm font-medium text-gray-700">IC Number</label>
                            <input wire:model="ic" type="text" id="ic" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                            @error('ic') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <!-- Gender -->
                        <div class="mb-4">
                            <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                            <input wire:model="gender" type="text" id="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                            @error('gender') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <!-- Age -->
                        <div class="mb-4">
                            <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                            <input wire:model="age" type="text" id="age" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                            @error('age') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <!-- Phone Number -->
                        <div class="mb-4">
                            <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                            <input wire:model="phone" type="text" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                            @error('phone') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <!-- Address -->
                        <div class="mb-4">
                            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                            <input wire:model="address" type="text" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                            @error('address') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Add Patient</button>
                        </div>
                    </form>
                    <!-- Success message -->
                    @if (session()->has('message'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mt-4">
                            {{ session('message') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>
    </main>
</div>
