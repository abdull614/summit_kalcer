<?php $__env->startSection('custom-css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/katalogProduk.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Popup HTML -->
    

    <!-- Hero Section Header -->
    <section class="hero" id="katalogProduk">
        <main class="content">
            <h1>Katalog Produk Summit <span>Kalcer.</span></h1>
        </main>
    </section>
    <!-- Hero Section Header End -->

    <!-- Hero Section Content -->
    <section class="hero-produk" id="katalogProduk">
        <main class="content">
            <h1>Untuk Disewakan</h1>
            <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori => $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <section class="hero-produk" id="katalogProduk">
                    <main class="content-produk">
                        <h1><?php echo e($kategori); ?></h1>
                        <div class="card-container">
                            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="card">
                                    <img src="<?php echo e(asset('storage/' . $item->gambar)); ?>">
                                    <h3><?php echo e($item->nama_produk); ?></h3>
                                    <p>Rp <?php echo e(number_format($item->harga_sewa, 0, ',', '.')); ?> / hari</p>
                                    <a href="#" class="btn-sewa">Sewa Sekarang</a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </main>
                </section>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </main>
    </section>
    <!-- Hero Section Content end-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\AUS\summit-kalcer1\resources\views/katalogProduk.blade.php ENDPATH**/ ?>