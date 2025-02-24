<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>

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

<!-- Service 9 - Bootstrap Brain Component -->
<section class="bg-light py-3 py-md-5 py-xl-8">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                <h2 class="mb-4 display-5 text-center">Our Services</h2>
                <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="container-fluid">
                    <div class="row gy-3 gy-md-4">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card border-dark">
                                <div class="card-body text-center p-4 p-xxl-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-box-fill text-primary mb-4" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.004-.001.274-.11a.75.75 0 0 1 .558 0l.274.11.004.001zm-1.374.527L8 5.962 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339Z" />
                                    </svg>
                                    <h4 class="mb-4">Dental Check Up</h4>
                                    <p class="mb-4 text-secondary">Regular dental check-ups are essential for maintaining good oral health. During a check-up, our dentists will examine your teeth to identify any potential issues early, ensuring a healthier and brighter smile.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card border-dark">
                                <div class="card-body text-center p-4 p-xxl-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-capsule text-primary mb-4" viewBox="0 0 16 16">
                                        <path d="M1.828 8.9 8.9 1.827a4 4 0 1 1 5.657 5.657l-7.07 7.071A4 4 0 1 1 1.827 8.9Zm9.128.771 2.893-2.893a3 3 0 1 0-4.243-4.242L6.713 5.429z" />
                                    </svg>
                                    <h4 class="mb-4">Tooth Extraction</h4>
                                    <p class="mb-4 text-secondary">If a tooth is severely damaged or decayed, extraction may be necessary to protect your oral health. Our team ensures a comfortable and pain-free procedure using advanced techniques and tools.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card border-dark">
                                <div class="card-body text-center p-4 p-xxl-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-clipboard-check-fill text-primary mb-4" viewBox="0 0 16 16">
                                        <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z" />
                                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5zm6.854 7.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                                    </svg>
                                    <h4 class="mb-4">Tooth Restoration</h4>
                                    <p class="mb-4 text-secondary">Restore the function and appearance of your teeth with our services, including fillings, crowns, and other procedures tailored to your needs. We use quality materials to give you a natural finish.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card border-dark">
                                <div class="card-body text-center p-4 p-xxl-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-diamond-half text-primary mb-4" viewBox="0 0 16 16">
                                        <path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L.436 6.95c-.58.58-.58 1.519 0 2.098l6.516 6.516c.58.58 1.519.58 2.098 0l6.516-6.516c.58-.58.58-1.519 0-2.098zM8 .989c.127 0 .253.049.35.145l6.516 6.516a.495.495 0 0 1 0 .7L8.35 14.866a.5.5 0 0 1-.35.145z" />
                                    </svg>
                                    <h4 class="mb-4">Preventive Treatment</h4>
                                    <p class="mb-4 text-secondary">Preventive care is the cornerstone of a healthy smile. This service includes professional cleanings, education on proper oral hygiene, and personalized advice to prevent cavities, gum disease, and other dental issues</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card border-dark">
                                <div class="card-body text-center p-4 p-xxl-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-eraser-fill text-primary mb-4" viewBox="0 0 16 16">
                                        <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828zm.66 11.34L3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293z" />
                                    </svg>
                                    <h4 class="mb-4">Fissure Sealant</h4>
                                    <p class="mb-4 text-secondary">Fissure sealants are a protective coating applied to the grooves of your back teeth. This treatment prevents food and bacteria from getting stuck, significantly reducing the risk of decay, especially in children and teens.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card border-dark">
                                <div class="card-body text-center p-4 p-xxl-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-front text-primary mb-4" viewBox="0 0 16 16">
                                        <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2zm5 10v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1h-2v5a2 2 0 0 1-2 2z" />
                                    </svg>
                                    <h4 class="mb-4">Fluoride Therapy</h4>
                                    <p class="mb-4 text-secondary">Fluoride therapy strengthens your teeth and helps prevent cavities by making them more resistant to acid attacks from plaque and sugar. Our fluoride treatments are done by skillful dentist make it safe, quick, and effective for patients of all ages.</p>
                                </div>
                            </div>
                        </div>
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
