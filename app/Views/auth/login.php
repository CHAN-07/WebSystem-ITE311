<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <h2 class="mb-4 text-center">Login</h2>

    <!-- Flash message -->
    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <?php if(isset($error)): ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>

    <!-- Login Form -->
    <form method="post" action="<?= base_url('login') ?>" class="mx-auto" style="max-width: 400px;">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input id="email" type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input id="password" type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
</div>

<?= $this->endSection() ?>
