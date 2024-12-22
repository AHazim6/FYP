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
        .contact-form {
            background-color: #f7f4e9;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-form label {
            font-weight: bold;
            color: #007b5e;
        }

        .contact-form input,
        .contact-form textarea {
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 15px;
            width: 100%;
        }

        .contact-form input[type="checkbox"] {
            margin-right: 5px;
        }

        .contact-form button {
            background-color: #007b5e;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            width: 100%;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #005f46;
        }

        .contact-form .checkbox-group {
            margin-bottom: 15px;
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
        /* Ensure footer is always at the bottom */
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        footer {
            margin-top: auto;
        }
        .checkbox-label {
            display: inline-flex;
            align-items: center;
            margin-right: 15px; /* Space between items */
            font-size: 14px;    /* Adjust font size if needed */
        }
        .checkbox-label input[type="checkbox"] {
            margin-right: 5px;  /* Space between checkbox and label */
        }
    </style>
</head>
<body>

@include('layouts.navbar')

<!-- Contact Form -->
<div class="container text-center my-5">
    <h1>Contact Us</h1>
    <div class="contact-form mx-auto col-md-6">
        <form action="{{ route('send.email') }}" method="post">
            @csrf
            <label>1. Email</label>
            <input type="email" name="email" class="form-control mb-3" required>

            <label>2. Name</label>
            <input type="text" name="name" class="form-control mb-3" required>

            <label for="subject">Subject:</label>
            <select id="subject" name="subject">
                <option value="Inquiry">Inquiry</option>
                <option value="Suggestion">Suggestion</option>
                <option value="Complaint">Complaint</option>
                <option value="Comment">Comment</option>
            </select><br><br>

            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="5" required></textarea><br><br>

            <button type="submit" class="btn btn-success">Send</button>
        </form>
    </div>
</div>

@include('layouts.footer')

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
