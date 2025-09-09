<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<nav>
    <a href="<?= site_url('/') ?>">Home</a> |
    <a href="<?= site_url('about') ?>">About</a> |
    <a href="<?= site_url('contact') ?>">Contact</a>
</nav>
<h2 class="text-center mt-5">Welcome to the Homepage!</h2>
<?= $this->endSection() ?>
