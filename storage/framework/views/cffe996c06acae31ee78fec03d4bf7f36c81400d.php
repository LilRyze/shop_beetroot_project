<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php $__env->startSection('title'); ?>
        <?php echo $__env->yieldSection(); ?>

</head>

<body>

<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <?php if(auth()->guard()->check()): ?>
                    <?php if(auth()->user()->hasRole('admin')): ?>
                        <h4 class="text-white">Admin panel</h4>
                        <p class="text-muted">Here you can add some goods, categories, users, watch orders and do CRUD operations with it. Admin, you are GOD.</p>
                    <?php endif; ?>
                    <?php else: ?>
                            <h4 class="text-white">Shop</h4>
                        <p class="text-muted">You can buy goods but you're not admin</p>

                    <?php endif; ?>

                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
                        <li><a href="https://www.instagram.com/sergeybezrodniy/" class="text-white">Follow on Instagram</a></li>
                        <li><a href="https://www.facebook.com/profile.php?id=100000250678684" class="text-white">Like on Facebook</a></li>
                        <li><a href="mailto:sergeyandreevich1703@gmail.com" class="text-white">Email me</a></li>
                        <li><a href="/" class="text-white">Home Page</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
            <a href="/shop" class="navbar-brand d-flex align-items-center">
                <?php if(auth()->guard()->check()): ?>
                <?php if(auth()->user()->hasRole('admin')): ?>
                    <strong>Admin Panel</strong>
                    <?php endif; ?>
                    <?php else: ?>
                        <strong href="/shop">Shop</strong>
                    <?php endif; ?>

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php $__env->startSection('container-panel'); ?>
            </div>
        </div>
    </div>
    <?php echo $__env->yieldSection(); ?>
    <?php echo $__env->yieldContent('content'); ?>


</body>
</html>

<?php echo $__env->make('bootstrap.bootstrap', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>