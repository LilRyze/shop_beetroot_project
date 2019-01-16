<?php $__env->startSection('title'); ?>
    <title>Actions with Orders</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('container-panel'); ?>
    <h3>Actions with Orders</h3>
    <br>
    <div class="container">
        <div class="row">
            <a href="/action_orders/create_order"><button type="button" class="btn btn-dark">Create Order</button></a>
        </div>
        <br>
        <div class="row">
            <a href="/action_orders/show_orders"><button type="button" class="btn btn-dark">Show Orders</button></a>
        </div>
        <br>
        <div class="row">
            <a href="/action_orders/delete_order"><button type="button" class="btn btn-dark">Delete Order</button></a>
        </div>
        <br>
        <div class="row">
            <a href="/action_orders/edit_order"><button type="button" class="btn btn-dark">Edit Order</button></a>
        </div>
        <br>
        <div class="row">
            <a href="/"><button type="button" class="btn btn-dark">Go home</button></a>
        </div>
        <br>
        <div class="row">
            <a href="/admin"><button type="button" class="btn btn-dark">Back to Admin Panel</button></a>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>