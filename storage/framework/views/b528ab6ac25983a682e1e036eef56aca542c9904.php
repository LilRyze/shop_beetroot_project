<?php $__env->startSection('title'); ?>
<title>Admin Panel</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('container-panel'); ?>
    <a href="/action_categories"><button type="button" class="btn btn-dark">Action with Categories</button></a>
    <a href="/action_goods"><button type="button" class="btn btn-dark">Action with Goods</button></a>
    <a href="/action_orders"><button type="button" class="btn btn-dark">Action with Orders</button></a>
    <a href="/action_users"><button type="button" class="btn btn-dark">Action with Users</button></a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>