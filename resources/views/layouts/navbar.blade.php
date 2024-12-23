<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('build/assets/img/logo.png') }}" alt="My Logo" class="img-fluid" style="height: 60px;" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Download Form
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ asset('build/assets/form/Consent Form.pdf') }}" download>Consent Form</a></li>
                        <li><a class="dropdown-item" href="{{ asset('build/assets/form/Medical History.pdf') }}" download>Medical History Form</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="/services">Our Services</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact-us">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Log In</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Sign Up</a></li>
            </ul>
        </div>
    </div>
</nav>
