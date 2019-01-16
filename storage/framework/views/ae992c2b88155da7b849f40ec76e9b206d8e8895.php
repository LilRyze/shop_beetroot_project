<?php $__env->startSection('title'); ?>
    <title>Orders</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('container-panel'); ?>
    <h2 class="col-sm-2 offset-1">Orders</h2>
    <div class="container">
        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th width="5%">Order ID</th>
                    <th width="20%">Customer name</th>
                    <th width="20%">City</th>
                    <th width="20%">Phone</th>
                    <th width="35%">Comment</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo e($order->id); ?></td>
                    <td><?php echo e($order->customer_name); ?></td>
                    <td><?php echo e($order->city); ?></td>
                    <td><?php echo e($order->phone); ?></td>
                    <td><?php echo e($order->comment); ?></td>
                </tr>
                </tbody>
            </table>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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