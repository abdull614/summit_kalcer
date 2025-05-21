<?php $__env->startSection('custom-css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/hubungiKami.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section Header -->
    <section class="hero" id="katalogProduk">
        <main class="content">
            <h1>Contact Summit <span>Kalcer.</span></h1>
        </main>
    </section>
    <!-- Hero Section Header End -->

    <!-- Contact -->
    <section class="hero-contact">
        <main class="content">
            <h1>Sewa Alat Gunung, Alat Camping dan Perlengkapan Outdoor Solo</h1>
            <div class="contact-buttons">
                <a href="https://wa.me/6281234567890" target="_blank" class="btn-contact">WhatsApp</a>
                <a href="https://instagram.com/summitkalcer" target="_blank" class="btn-contact">Instagram</a>
                <a href="https://tiktok.com/@summitkalcer" target="_blank" class="btn-contact">TikTok</a>
            </div>
        </main>
    </section>
    <!-- Contact End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\AUS\summit-kalcer1\resources\views/hubungiKami.blade.php ENDPATH**/ ?>