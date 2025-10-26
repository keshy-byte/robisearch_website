<?php include 'includes/navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Robisearch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            cursor: auto !important; 
        }

        * {
            cursor: auto !important; 
        }

        .hero {
            text-align: center;
            padding: 60px 20px;
            background: linear-gradient(135deg, #007bff, #00a8ff);
            color: white;
        }

        .hero h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }

        .intro {
            text-align: center;
            margin: 30px auto;
            font-size: 1.1rem;
            color: #444;
            max-width: 800px;
        }

        
        .card {
            position: relative;
            overflow: hidden;
            border: none;
            border-radius: 12px;
            height: 280px;
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.6);
            background-size: cover;
            background-position: center;
            transition: transform 0.3s ease, filter 0.3s ease;
        }

        .card::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
            transition: background 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            filter: brightness(1.05);
        }

        .card:hover::before {
            background: rgba(0, 0, 0, 0.35);
        }

        .card-body {
            position: relative;
            z-index: 2;
        }

        .card h5 {
            font-weight: bold;
            color: #fff;
        }

        .section-title {
            text-align: center;
            margin-bottom: 30px;
            font-weight: 600;
            color: #2c3e50;
        }
    </style>
</head>
<body>

<div class="hero">
    <h1>Welcome to Robisearch Technologies</h1>
    <p>Your one-stop platform for modern, reliable, and efficient software solutions.</p>
</div>

<div class="intro">
    <p>
        At <strong>Robisearch Technologies</strong>, we provide a wide range of innovative digital solutions 
        designed to help businesses grow and operate efficiently. From enterprise systems to web design,
        we ensure reliability, speed, and innovation in every project.
    </p>
</div>

<div class="container my-5">
    <h2 class="section-title">Our Featured Solutions</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow-lg" style="background-image: url('images/p2.jpg');">
                <div class="card-body text-center">
                    <h5 class="card-title">Point Of Sale (POS) Software</h5>
                    <p class="card-text">A fast, reliable, and easy-to-use POS system designed to simplify your business transactions.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-lg" style="background-image: url('images/p5.jpeg');">
                <div class="card-body text-center">
                    <h5 class="card-title">Property Management Software</h5>
                    <p class="card-text">Manage tenants, payments, and property records efficiently with our intuitive property system.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
    <div class="card shadow-lg" style="background-image: url('images/p1.jpg');">
        <div class="card-body text-center">
            <h5 class="card-title">Bulk SMS Software</h5>
            <p class="card-text">Easily reach your customers instantly with reliable bulk SMS campaigns to promote offers, alerts, and updates.</p>
        </div>
    </div>
</div>


        <div class="col-md-4">
    <div class="card shadow-lg" style="background-image: url('images/p3.jpeg');">
        <div class="card-body text-center">
            <h5 class="card-title">Room Booking System</h5>
            <p class="card-text">Easily manage reservations, check-ins, and availability with our efficient and user-friendly room booking system.</p>
        </div>
    </div>
</div>


        <div class="col-md-4">
    <div class="card shadow-lg" style="background-image: url('images/p4.jpeg');">
        <div class="card-body text-center">
            <h5 class="card-title">Inventory Management System</h5>
            <p class="card-text">Track stock levels, manage suppliers, and monitor sales efficiently with our powerful inventory management solution.</p>
        </div>
    </div>
</div>


        <div class="col-md-4">
            <div class="card shadow-lg" style="background-image: url('images/p10.jpg');">
                <div class="card-body text-center">
                    <h5 class="card-title">Web Design & Development</h5>
                    <p class="card-text">Get beautifully designed, responsive websites that represent your brand and engage your audience.</p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
