<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ITE311-ABELGAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Updated to use the supplied red for all bars */
        :root { --brand-dark: #c62828; --brand-accent: #b71c1c; }
        /* Use same dark-slate color as the student sidebar */
        .navbar-custom { background-color: var(--brand-dark); }
        .navbar-custom .nav-link { color: rgba(255,255,255,0.95); }
        .hero-banner { background:var(--brand-dark); color:#fff; padding:24px 36px; border-radius:10px; display:inline-block; font-weight:700; font-size:48px; }
        /* Brand buttons matching navbar (dark-slate) */
        .btn-abelgas {
            background-color: var(--brand-dark);
            border-color: #2b3236;
            color: #fff;
        }
        .btn-abelgas:hover, .btn-abelgas:focus {
            background-color: #2b3236;
            border-color: #1f2629;
            color: #fff;
        }
        /* Announcements link (sidebar) accent */
        .announce-link { color: var(--brand-accent); }
        .btn-outline-abelgas {
            color: #fff;
            background-color: transparent;
            border: 1px solid rgba(255,255,255,0.85);
        }
        @media (max-width:576px) { .hero-banner { font-size:28px; padding:18px 20px; } }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand fw-bold" href="<?= base_url(); ?>">ITE311-ABELGAS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('home'); ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('about'); ?>">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('contact'); ?>">Contact</a></li>
                    <li class="nav-item d-flex ms-3">
                        <a class="btn btn-outline-light btn-sm me-2" href="<?= base_url('login'); ?>">Login</a>
                        <a class="btn btn-outline-light btn-sm" href="<?= base_url('register'); ?>">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
