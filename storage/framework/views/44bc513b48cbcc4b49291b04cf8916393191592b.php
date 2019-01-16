<?php $__env->startSection('title'); ?>
    <title>Create Order</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('container-panel'); ?>
    <h3>Create Order</h3>
    <br>
    <form method="post" action="/action_orders/create_order" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <div class="container">
            <div class="form-group- row">
                <label for="goods_id" class="form-group">Goods ID</label>
                <input name="goods_id" type="text" class="form-control" id="goods_id"
                       placeholder="Goods ID">
            </div>
            <div class="form-group- row">
                <label for="customer_name" class="form-group">Customer Name</label>
                <input name="customer_name" type="text" class="form-control" id="customer_name"
                       placeholder="Customer Name">
            </div>
            <div class="form-group- row">
                <label for="city" class="form-group">City</label>
                <input name="city" type="text" class="form-control" id="city"
                       placeholder="City">
            </div>
            <div class="form-group row">
                <label for="phone" class="form-group">Phone</label>
                <input name="phone" type="text" class="form-control" id="phone"
                       placeholder="Phone">
            </div>
            <div class="form-group row">
                <label for="comment" class="form-group">Comment</label>
                <input name="comment" type="text" class="form-control" id="comment"
                       placeholder="Comment">
            </div>
            <div class="form-group row">
                <button type="submit" class="btn btn-outline-dark">Create Order</button>
            </div>
            <div class="row">
                <a href="/admin"><button type="button" class="btn btn-dark">Back to Admin Panel</button></a>
            </div>
        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>