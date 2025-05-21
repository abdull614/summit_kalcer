<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Summit Kalcer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Login</h2>

        <?php if(session('error')): ?>
            <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
        <?php endif; ?>

        <form action="<?php echo e(route('login')); ?>" method="POST" class="w-50 mx-auto">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" required autofocus>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>

            <a href="<?php echo e(route('google.redirect')); ?>" class="btn btn-danger w-100 mt-3">Login with Google</a>
        </form>
    </div>
</body>
</html>
<?php /**PATH D:\AUS\summit-kalcer1\resources\views/auth/login.blade.php ENDPATH**/ ?>