<div class="app-layout">
    @include('layouts.sidebar')
    <main>
        @yield('content')
    <div class="flex justify-between items-center px-2 sm:px-4 max-w-7xl py-4 lg:px-6">
        <h1 class="text-2xl font-semibold">Dentist List</h1>
        <span>{{ \Carbon\Carbon::now()->setTimezone('Asia/Kuala_Lumpur')->format('h:i A - d F, Y') }}</span>
    </div>
    <section>
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex items-center justify-between p-4">
                        <div class="relative w-full">
                            <label>
                                <input wire:model.defer="search"
                                       wire:keydown.enter="applySearch"
                                       type="text"
                                       placeholder="Search"
                                       class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-12 p-2"
                                />
                            </label>
                        </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-black">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th class="w-1/4 px-4 py-2 border text-center">Name</th>
                            <th class="w-1/4 px-4 py-2 border text-center">Contact</th>
                            <th class="w-1/4 px-4 py-2 border text-center">Email</th>
                            <th class="w-1/4 px-4 py-2 border text-center">password</th>
                            <th class="w-1/4 px-4 py-2 border text-center">Joined</th>
                            <th class="w-1/4 px-4 py-2 border text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dentists as $dentist)
                            <tr wire:key="dentist-{{ $dentist->id }}" class="border-b dark:border-gray-700">
                                <td class="px-4 py-2 border text-center">{{ $dentist->name }}</td>
                                <td class="px-4 py-2 border text-center">{{ $dentist->contact }}</td>
                                <td class="px-4 py-2 border text-center">{{ $dentist->email }}</td>
                                <td class="px-4 py-2 border text-center">{{ $dentist->password }}</td>
                                <td class="px-4 py-2 border text-center">{{ $dentist->created_at->format('d M Y') }}</td>
                                <td class="px-4 py-2 border text-center">
                                    <button onclick="confirm('Are you sure to delete {{ $dentist->name }} ?') || event.stopImmediatePropagation()"
                                            wire:click="delete({{ $dentist->id }})"
                                            class="px-3 py-1 bg-red-500 text-white rounded">
                                        X
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination and Per Page Selection -->
                <div class="py-4 px-3">
                    <div class="flex justify-between">
                        <div class="flex space-x-4 items-center">
                            <label class="w-32 text-sm font-medium text-gray-900">Per Page</label>
                            <select wire:model="perPage" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                        {{ $dentists->links() }} <!-- Pagination links -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>
</div>
