<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITE311-ABELGAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, sans-serif;
        }
        .navbar {
            background: #c82333;
        }
        .navbar-brand {
            font-weight: bold;
            color: #fff !important;
        }
        .nav-link {
            color: #fff !important;
        }
        .hero {
            background: url('<?= base_url("images/hero-bg.jpg"); ?>') no-repeat center center/cover;
            height: 100vh;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
            background: rgba(0,0,0,0.5);
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>">ITE311-ABELGAS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('about'); ?>">About</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('contact'); ?>">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero">
    <div>
        <h1>Welcome to ITE311-ABELGAS Website</h1>
        <p class="lead">Bootstrap + CodeIgniter for Modern Web Development</p>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
