<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <h2 class="mb-4 text-center">Register</h2>

    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <?php if(isset($validation)): ?>
        <div class="alert alert-danger">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('register') ?>" method="post" class="mx-auto" style="max-width: 400px;">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input id="name" type="text" name="name" class="form-control" required value="<?= set_value('name') ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input id="email" type="email" name="email" class="form-control" required value="<?= set_value('email') ?>">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input id="password" type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="password_confirm" class="form-label">Confirm Password</label>
            <input id="password_confirm" type="password" name="password_confirm" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Register</button>
    </form>

    <p class="mt-3 text-center">
        Already have an account? <a href="<?= base_url('login') ?>">Login here</a>
    </p>
</div>

<?= $this->endSection() ?>
