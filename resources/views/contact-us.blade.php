<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

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
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        footer {
            margin-top: auto;
        }
        .embed-container {
            position: relative;
            overflow: hidden;
            width: 100%;
            padding-top: 56.25%; /* 16:9 Aspect Ratio */
        }

        .embed-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>

@include('layouts.navbar')

<!-- Contact Section -->
<div class="container my-5">
    <div class="row">
        <!-- Left Column: Contact Form -->
        <div class="col-md-9">
            <div class="embed-container">
                <iframe
                    src="https://forms.office.com/Pages/ResponsePage.aspx?id=9nbOGPSZf0WfYqzWXZuXd2Fi8AoXOF1Dv4gVGYVx6QNUNDcxTUI4OFU1WVJBRFkyOVlPUjREQk1NVC4u&embed=true"
                    width="100%"
                    height="500"
                    frameborder="0"
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <!-- Right Column: Location and Contact Information -->
        <div class="col-md-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.8445471092177!2d103.3010253!3d3.8435280000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31c8bbad74b2f68b%3A0xe121337cc83a66c5!2sKulliyyah%20of%20Dentistry!5e0!3m2!1sen!2smy!4v1736180916300!5m2!1sen!2smy"
                width="100%"
                height="300"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
            <ul class="list-unstyled">
                <li><strong>Address:</strong> Kulliyyah of Dentistry, IIUM Kuantan, Jalan Sultan Ahmad Shah, Bandar Indera Mahkota, 25200 Kuantan, Pahang Darul Makmur</li>
                <li><strong>Email:</strong> <a href="mailto:dentistry@iium.edu.my">dentistry@iium.edu.my</a></li>
                <li><strong>Phone:</strong> 609-570 5466 / 609-570 5580 (Fax)</li>
                <li><strong>Dental Clinic:</strong> 609-570 5500 / 5537</li>
                <li><strong>Cleft Clinic:</strong> 609-570 5537</li>
            </ul>
        </div>
    </div>
</div>

@include('layouts.footer')

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
