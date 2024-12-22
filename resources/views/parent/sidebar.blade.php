<div id="sidebar" class="sidebar bg-white">
    <button class="btn btn-outline-secondary toggle-btn" id="toggleSidebar" type="button">
        ☰
    </button>

    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- My Dashboard -->
        <div class="items-center px-3 py-3 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-custom-green hover:bg-green-700 focus:outline-none transition ease-in-out duration-150 mx-2">
            <a href="{{ route('parent.dashboard') }}" class="{{ request()->routeIs('parent.dashboard') ? 'text-blue-800' : 'text-white' }}">
                {{ __('My Dashboard') }}
            </a>
        </div>
        <!-- Consent Form -->
        <div class="items-center px-3 py-3 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-custom-green hover:bg-green-700 focus:outline-none transition ease-in-out duration-150 mx-2">
            <a href="{{ asset('build/assets/form/Consent Form.pdf') }}" class="text-white hover:text-blue-800">
                {{ __('Consent Form') }}
            </a>
        </div>
        <!-- Medical History Form -->
        <div class="items-center px-3 py-3 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-custom-green hover:bg-green-700 focus:outline-none transition ease-in-out duration-150 mx-2">
            <a href="{{ asset('build/assets/form/Medical History.pdf') }}" class="text-white hover:text-blue-800">
                {{ __('Medical History Form') }}
            </a>
        </div>
    </div>
</div>
