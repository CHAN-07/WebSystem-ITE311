<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include('navbar.php'); ?>

<div class="container my-5">
    <h2 class="text-center text-primary mb-4">Contact Us</h2>
    <p class="text-center lead">We’d love to hear from you! Fill out the form below.</p>

    <form class="mx-auto p-4 shadow rounded" style="max-width: 600px;">
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Your Name" required>
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" placeholder="Your Email" required>
        </div>
        <div class="mb-3">
            <textarea class="form-control" rows="4" placeholder="Your Message" required></textarea>
        </div>
        <button type="submit" class="btn btn-danger w-100">Send Message</button>
    </form>
</div>

</body>
</html>
