@php use Carbon\Carbon; @endphp
<div class="app-layout">
    @include('layouts.sidebar')
    <main>
        @yield('content')
        <div class="flex justify-between items-center px-2 sm:px-4 max-w-7xl py-6 lg:px-8">
            <h1 class="text-2xl font-semibold">Add New Patient</h1>
            <span>{{ Carbon::now()->setTimezone('Asia/Kuala_Lumpur')->format('h:i A - d F, Y') }}</span>
        </div>
        <section>
            <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                    <div class="p-6">
                        <form wire:submit.prevent="save">
                            <!-- Name and IC Number -->
                            <div class="form-row grid grid-cols-2 gap-4">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input wire:model="name" type="text" id="name"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                    @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="ic">IC Number</label>
                                    <input wire:model="ic" type="text" id="ic"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                    @error('ic') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <!-- Parent Name -->
                            <div class="form-group mt-4">
                                <label for="parent_name">Parent Name</label>
                                <input wire:model="parent_name" type="text" id="parent_name"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                @error('parent_name') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <!-- Phone Number, Gender, and Age -->
                            <div class="form-row grid grid-cols-3 gap-4 mt-4">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input wire:model="phone" type="text" id="phone"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                    @error('phone') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <input wire:model="gender" type="text" id="gender"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                    @error('gender') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="age">Age</label>
                                    <input wire:model="age" type="text" id="age"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                    @error('age') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="form-group mt-4">
                                <label for="address">Address</label>
                                <input wire:model="address" type="text" id="address"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                @error('address') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary mt-4">Add Patient</button>
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
