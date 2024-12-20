<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentism</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

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
        .intro-section {
            padding: 40px 0;
            text-align: center;
        }
        .intro-section img {
            max-width: 300px;
            margin-bottom: 20px;
        }
        #first-visit .carousel-item img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(237, 231, 223, 0.89);
        }

        #first-visit p {
            font-size: 1rem;
            color: #333;
            margin-top: 10px;
        }
        .carousel-item p {
            font-weight: bold; /* Makes text bold */
            color: #ffffff; /* Changes text color */
            background-color: rgba(239, 132, 23, 0.8); /* Adds a semi-transparent white background */
            padding: 10px 15px; /* Adds padding around the text */
            border-radius: 8px; /* Adds rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Adds a subtle shadow for depth */
            display: inline-block; /* Prevents the background from stretching */
            margin-top: 10px; /* Adds some space above the text */
        }
        .carousel-item .slide-number {
            position: absolute;
            top: 10px; /* Adjust this value to position the number higher or lower */
            left: 10px; /* Adjust this value to position the number farther left or right */
            background-color: rgba(0, 0, 0, 0.7); /* Adds a semi-transparent black background */
            color: white; /* Makes the number white */
            font-size: 1.5rem; /* Adjusts the size of the number */
            padding: 5px 10px; /* Adds spacing around the number */
            border-radius: 50%; /* Makes the background circular */
            z-index: 10; /* Ensures the number is above the image */
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: invert(1);
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

<!-- Hero Banner -->
<div class="container-fluid p-0">
    <img src="{{ asset('build/assets/img/banner.jpg') }}" alt="Clinic Banner" class="banner-image">
</div>

<!-- Introduction Section -->
<section class="container my-5 intro-section">
    <div class="row align-items-center">
        <div class="col-md-6 text-center">
            <img src="{{ asset('build/assets/img/picture.jpg') }}" alt="Dentist Working" style="max-width: 80%; height: auto;">
        </div>
        <div class="col-md-6">
            <p>
                Our dental clinic is designed to provide compassionate and specialized care for children with autism.
                Collaborating with Kulliyyah of Dentistry at IIUM Kuantan, Dentism focuses on patience, empathy, and
                understanding, building trust with each child throughout their dental journey. We believe every child
                deserves quality dental care in an environment celebrating their unique abilities, and we look forward
                to partnering with parents to ensure their child's dental health.
            </p>
            <a href="/about" class="btn btn-success">Read More</a>
        </div>
    </div>
</section>

<!-- Your First Visit Steps -->
<section id="first-visit" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">What to Expect on Your First Visit</h2>
        <div id="firstVisitCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner text-center">
                <!-- Slide 1 -->
                <div class="carousel-item active position-relative">
                    <img src="{{ asset('build/assets/img/step1.jpg') }}" class="d-block mx-auto img-fluid rounded" alt="Waiting Area" style="max-width: 40%; height: auto;">
                    <div class="slide-number">1</div>
                    <p class="mt-3">When I arrive at the clinic, I will wait in the comfortable waiting area until my name is called.</p>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item position-relative">
                    <img src="{{ asset('build/assets/img/step2.jpg') }}" class="d-block mx-auto img-fluid rounded" alt="Reception Desk" style="max-width: 40%; height: auto;">
                    <div class="slide-number">2</div>
                    <p class="mt-3">The staff will greet me and confirm my details at the reception desk.</p>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item position-relative">
                    <img src="{{ asset('build/assets/img/step3.jpg') }}" class="d-block mx-auto img-fluid rounded" alt="Dental Chair" style="max-width: 40%; height: auto;">
                    <div class="slide-number">3</div>
                    <p class="mt-3">In the clinic, I will sit on the dental chair and prepare for my examination with the dentist.</p>
                </div>
                <!-- Slide 4 -->
                <div class="carousel-item position-relative">
                    <img src="{{ asset('build/assets/img/step4.jpg') }}" class="d-block mx-auto img-fluid rounded" alt="Dental Chair" style="max-width: 40%; height: auto;">
                    <div class="slide-number">4</div>
                    <p class="mt-3">In the clinic, I will sit on the dental chair and prepare for my examination with the dentist.</p>
                </div>
                <!-- Slide 5-->
                <div class="carousel-item position-relative">
                    <img src="{{ asset('build/assets/img/step5.jpg') }}" class="d-block mx-auto img-fluid rounded" alt="Dental Chair" style="max-width: 40%; height: auto;">
                    <div class="slide-number">5</div>
                    <p class="mt-3">In the clinic, I will sit on the dental chair and prepare for my examination with the dentist.</p>
                </div>
                <!-- Slide 6 -->
                <div class="carousel-item position-relative">
                    <img src="{{ asset('build/assets/img/step6.jpg') }}" class="d-block mx-auto img-fluid rounded" alt="Dental Chair" style="max-width: 40%; height: auto;">
                    <div class="slide-number">6</div>
                    <p class="mt-3">In the clinic, I will sit on the dental chair and prepare for my examination with the dentist.</p>
                </div>
                <!-- Slide 7 -->
                <div class="carousel-item position-relative">
                    <img src="{{ asset('build/assets/img/step7.jpg') }}" class="d-block mx-auto img-fluid rounded" alt="Dental Chair" style="max-width: 40%; height: auto;">
                    <div class="slide-number">7</div>
                    <p class="mt-3">In the clinic, I will sit on the dental chair and prepare for my examination with the dentist.</p>
                </div>
                <!-- Slide 8 -->
                <div class="carousel-item position-relative">
                    <img src="{{ asset('build/assets/img/step8.jpg') }}" class="d-block mx-auto img-fluid rounded" alt="Dental Chair" style="max-width: 40%; height: auto;">
                    <div class="slide-number">8</div>
                    <p class="mt-3">In the clinic, I will sit on the dental chair and prepare for my examination with the dentist.</p>
                </div>
                <!-- Slide 9 -->
                <div class="carousel-item position-relative">
                    <img src="{{ asset('build/assets/img/step9.jpg') }}" class="d-block mx-auto img-fluid rounded" alt="Dental Chair" style="max-width: 40%; height: auto;">
                    <div class="slide-number">9</div>
                    <p class="mt-3">In the clinic, I will sit on the dental chair and prepare for my examination with the dentist.</p>
                </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#firstVisitCarousel" data-bs-slide="prev" >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#firstVisitCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

@include('layouts.footer')
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
