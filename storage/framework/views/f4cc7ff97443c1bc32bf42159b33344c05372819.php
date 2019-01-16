<?php $__env->startSection('title'); ?>
    <title>Edit Category</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('container-panel'); ?>
    <h3>Edit Category</h3>
    <br>
    <form method="post" action="/action_categories/edit_category" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <div class="container">
            <div class="form-group- row">
                <label for="name_to_change" class="form-group">What to change</label>
                <input name="name_to_change" type="text" class="form-control" id="name_to_change"
                       placeholder="Name to change">
            </div>
            <div class="form-group- row">
                <label for="name" class="form-group">Category Name</label>
                <input name="name" type="text" class="form-control" id="name"
                       placeholder="Category Name">
            </div>
            <div class="form-group row">
                <label for="latin_url" class="form-group">Latin URL</label>
                <input name="latin_url" type="text" class="form-control" id="latin_url"
                       placeholder="Latin URL">
            </div>
            <div class="form-group row">
                <button type="submit" class="btn btn-outline-dark">Edit Category</button>
            </div>
            <div class="row">
                <a href="/admin"><button type="button" class="btn btn-dark">Back to Admin Panel</button></a>
            </div>
        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>