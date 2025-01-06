<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Custom Styles -->
    <style>
        .navbar-custom {
            background-color: #007b5e;
        }
        .navbar-brand img {
            height: 60px;
        }
        .navbar-nav .nav-link {
            margin: 0 10px;
        }
        .banner-image {
            width: 100%;
            height: auto;
        }
        .section-header {
            color: #007b5e;
            font-weight: bold;
        }
        .content-paragraph {
            font-size: 1.1rem;
            color: #5a5a5a;
        }
        .icon-list {
            list-style: none;
            padding: 0;
        }
        .icon-list li {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .icon-list li img {
            width: 20px;
            margin-right: 10px;
        }
        .footer {
            background-color: #007b5e;
            color: white;
            padding: 40px 0;
        }
        .footer h5 {
            margin-bottom: 20px;
        }
        .footer p {
            margin-bottom: 10px;
        }
        .footer a {
            color: white;
            text-decoration: none;
            margin-right: 10px;
        }
        .footer .social-icons img {
            width: 24px;
            margin-right: 10px;
        }
    </style>
</head>
<body>

@include('layouts.navbar')

<!-- About Section -->
<section class="py-5">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-6 col-md-6">
                <img class="img-fluid rounded" src="{{ asset('build/assets/img/logoHijau.png') }}" alt="Dentism Banner">
            </div>
            <div class="col-12 col-md-6">
                <h2 class="section-header">What is Dentism?</h2>
                <p class="content-paragraph">
                    Dentism is a web-based dental record management specifically designed for Kuliyyah of Dentistry at IIUM Kuantan . It helps manage the records efficiently and improve the overall care experience by letting the parents to stay involved.
                </p>
                <ul class="icon-list">
                    <li><img src="{{ asset('build/assets/img/check-button.png') }}" alt="Check Icon">Implementing the Picture Exchange Communication System (PECS) to ease communication during dental visits.</li>
                    <li><img src="{{ asset('build/assets/img/check-button.png') }}" alt="Check Icon">Actively involving parents and guardians in the treatment process to ensure comfort and trust.</li>
                    <li><img src="{{ asset('build/assets/img/check-button.png') }}" alt="Check Icon">Creating a sensory-friendly environment to reduce anxiety and stress.</li>
                    <li><img src="{{ asset('build/assets/img/check-button.png') }}" alt="Check Icon">Offering training for parents and caregivers to support oral hygiene at home.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Why Dentism Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-header text-center mb-4">Why Dentism?</h2>
        <p class="content-paragraph text-center">
            At Dentism, we are committed to creating a welcoming and accommodating environment for children with autism. Our clinic offers the following advantages:
        </p>
        <div class="row gy-4">
            <div class="col-md-4">
                <div class="p-3 bg-white rounded shadow-sm">
                    <h4 class="section-header">Patient-Centered Care</h4>
                    <p class="content-paragraph">
                        We take the time to understand each child's needs and provide care that ensures their comfort and trust throughout their dental visits.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 bg-white rounded shadow-sm">
                    <h4 class="section-header">Expertise in Autism Dentistry</h4>
                    <p class="content-paragraph">
                        Our team is trained in handling autism-specific challenges, providing care with patience and empathy.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 bg-white rounded shadow-sm">
                    <h4 class="section-header">Collaborative Approach</h4>
                    <p class="content-paragraph">
                        Partnering with parents and guardians, we ensure every visit is tailored to the child's unique requirements for a positive experience.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
