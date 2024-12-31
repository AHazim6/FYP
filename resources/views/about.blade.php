<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentism</title>

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

<!-- About 1 - Bootstrap Brain Component -->
<section class="py-3 py-md-5">
    <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
            <div class="col-12 col-lg-6 col-xl-5">
                <img class="img-fluid rounded" loading="lazy" src="{{ asset('build/assets/img/banner.jpg') }}" alt="About 1">
            </div>
            <div class="col-12 col-lg-6 col-xl-7">
                <div class="row justify-content-xl-center">
                    <div class="col-12 col-xl-11">
                        <h2 class="mb-3">Who Are We?</h2>
                        <p class="lead fs-4 text-secondary mb-3">Welcome to Dentism, where compassionate dentistry meets specialized care for children with autism. At Dentism, we've collaborated closely with the esteemed Kuliyyah of Dentistry at IIUM Kuantan to create a unique dental clinic tailored specifically to meet the needs of children on the autism spectrum</p>
                        <p class="lead fs-4 text-secondary mb-3">Our approach to dental care for autism kids is rooted in patience, empathy, and understanding. We take the time to build trust with each child, ensuring they feel comfortable and empowered throughout their dental journey. Whether it's a routine check-up, preventative care, or specialized treatments, our
                            team is equipped with the expertise and compassion to deliver exceptional dental care tailored to your child's individual needs. </p>
                        <p class="lead fs-4 text-secondary mb-3">At Dentism, we believe that every child deserves access to quality dental care in an environment that celebrates their unique abilities. We are proud to be pioneers in the field of dentistry for autism kids, and we look forward to partnering with you to ensure your child's dental health and overall well-being.</p>
                    </div>
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
