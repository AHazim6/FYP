<div class="app-layout">
    @include('layouts.sidebar')
    <main>
        @yield('content')
    <div class="flex justify-between items-center px-2 sm:px-4 max-w-7xl py-6 lg:px-8">
        <h1 class="text-2xl font-semibold">Add New Dentist</h1>
        <span>{{ \Carbon\Carbon::now()->setTimezone('Asia/Kuala_Lumpur')->format('h:i A - d F, Y') }}</span>
    </div>
    <section>
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="p-6">
                    <form wire:submit.prevent="save">
                        <!-- Name and Contact -->
                        <div class="form-row grid grid-cols-2 gap-4">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input wire:model="name" type="text" id="name"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="contact">Phone Number</label>
                                <input wire:model="contact" type="text" id="contact" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                @error('contact') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="form-group mt-4">
                            <label for="email">Email</label>
                            <input wire:model="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <!-- Password -->
                        <div class="form-group mt-4">
                            <label for="password">Password</label>
                            <input wire:model="password" type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                            @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <!-- Confirm Password -->
                        <div class="mb-4">
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                            <input wire:model="password_confirmation" type="password" id="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                            @error('password_confirmation') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Add Dentist</button>
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
        </div>
    </section>
    </main>
</div>
