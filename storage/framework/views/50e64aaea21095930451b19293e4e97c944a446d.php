<?php $__env->startSection('title'); ?>
    <title>Delete Good</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('container-panel'); ?>
    <h3>Delete Good</h3>

    <form method="post" action="/action_goods/delete_good" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <div class="container">
            <div class="form-group- row">
                <label for="name" class="form-group">Good Name</label>
                <input name="name" type="text" class="form-control" id="name"
                       placeholder="Category Name">
            </div>
            <br>
            <div class="form-group row">
                <button type="submit" class="btn btn-outline-dark">Delete Good</button>
            </div>
            <div class="row">
                <a href="/admin"><button type="button" class="btn btn-dark">Back to Admin Panel</button></a>
            </div>
        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>