<div id="sidebar" class="sidebar bg-white">
    <button class="btn btn-outline-secondary toggle-btn" id="toggleSidebar" type="button">
        ☰
    </button>

    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- My Dashboard -->
        <div class="items-center px-3 py-3 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-custom-green hover:bg-green-700 focus:outline-none transition ease-in-out duration-150 mx-2">
            <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'text-blue-800' : 'text-white' }}">
                {{ __('My Dashboard') }}
            </a>
        </div>

        <!-- Links visible to both Admin and Dentist -->
        @if(auth()->user()->role === 'admin' || auth()->user()->role === 'dentist')
            <div class="items-center px-3 py-3 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-custom-green hover:bg-green-700 focus:outline-none transition ease-in-out duration-150 mx-2">
                <a href="{{ route('patients.add') }}" class="{{ request()->routeIs('patients.add') ? 'text-blue-800' : 'text-white' }}">
                    {{ __('Add Patient') }}
                </a>
            </div>
            <div class="items-center px-3 py-3 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-custom-green hover:bg-green-700 focus:outline-none transition ease-in-out duration-150 mx-2">
                <a href="{{ route('patients.list') }}" class="{{ request()->routeIs('patients.list') ? 'text-blue-800' : 'text-white' }}">
                    {{ __('Patient List') }}
                </a>
            </div>
        @endif

        <!-- Links visible only to Admin -->
        @if(auth()->user()->role === 'admin')
            <div class="items-center px-3 py-3 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-custom-green hover:bg-green-700 focus:outline-none transition ease-in-out duration-150 mx-2">
                <a href="{{ route('dentists.add') }}" class="{{ request()->routeIs('dentists.add') ? 'text-blue-800' : 'text-white' }}">
                    {{ __('Add Dentist') }}
                </a>
            </div>
            <div class="items-center px-3 py-3 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-custom-green hover:bg-green-700 focus:outline-none transition ease-in-out duration-150 mx-2">
                <a href="{{ route('dentists.list') }}" class="{{ request()->routeIs('dentists.list') ? 'text-blue-800' : 'text-white' }}">
                    {{ __('Dentist List') }}
                </a>
            </div>
        @endif
    </div>
</div>
