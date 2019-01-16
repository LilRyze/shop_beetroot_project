<?php $__env->startSection('title'); ?>
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
    <title>Make Order</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('container-panel'); ?>
    <form method="post" action="/create_order/<?php echo e($good->latin_url); ?>" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <h4>Your order for <?php echo e($good->name); ?></h4>
        <br>
        <div class="form-group row">
            <label for="customer_name" class="form-group">First and second name</label>
                <input name="customer_name" type="text" class="form-control" id="customer_name"
                       placeholder="First and second name">
        </div>
        <div class="form-group row">
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
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-dark">Submit order</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>