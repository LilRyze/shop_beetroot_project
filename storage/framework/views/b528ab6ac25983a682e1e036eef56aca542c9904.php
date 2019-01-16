<?php $__env->startSection('title'); ?>
<title>Admin Panel</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('container-panel'); ?>
<button type="button" class="btn btn-dark">Action with Categories</button>
<button type="button" class="btn btn-dark">Action with Goods</button>
<button type="button" class="btn btn-dark">Action with Orders</button>
<button type="button" class="btn btn-dark">Action with Pages</button>
<button type="button" class="btn btn-dark">Action with Users</button>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>