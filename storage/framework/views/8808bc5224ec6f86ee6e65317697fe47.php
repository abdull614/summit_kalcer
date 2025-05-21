

<nav class="navbar">
    <div class="navbar-left">
        <button class="hamburger" id="hamburger">
            <i class="fas fa-bars"></i>
        </button>
        <a href="<?php echo e(route('home')); ?>" class="logo">Summit<span>Kalcer.</span></a>
    </div>

    <ul class="nav-links" id="nav-links">
        <li><a href="<?php echo e(route('cara.sewa')); ?>">Cara Sewa</a></li>
        <li><a href="<?php echo e(route('katalog.produk')); ?>">Katalog Produk</a></li>
        <li><a href="<?php echo e(route('hubungi.kami')); ?>">Hubungi Kami</a></li>
        
        
    </ul>

    <div class="navbar-right">
        <button class="icon-button"><i class="fas fa-search"></i></button>
        <button class="icon-button"><i class="fas fa-shopping-cart"></i></button>
        
        <div class="navbar-login">
            <?php if(auth()->guard()->guest()): ?>
                <a href="<?php echo e(route('login')); ?>" class="btn btn-outline-primary rounded-pill px-3 py-1 me-3">
                    <i class="fas fa-sign-in-alt me-1"></i> Login
                </a>
            <?php else: ?>
                <div class="dropdown me-3">
                    <button class="btn btn-outline-secondary rounded-pill px-3 py-1 dropdown-toggle" type="button"
                        id="dropdownUserButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle me-1"></i> <?php echo e(Auth::user()->name); ?>

                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUserButton">
                        <li>
                            <form method="POST" action="<?php echo e(route('logout')); ?>">
                                <?php echo csrf_field(); ?>
                                <button class="dropdown-item text-danger" type="submit">
                                    <i class="fas fa-sign-out-alt me-1"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            <?php endif; ?>
        </div>

    </div>
</nav>
<?php /**PATH D:\AUS\summit-kalcer1\resources\views/navbar.blade.php ENDPATH**/ ?>