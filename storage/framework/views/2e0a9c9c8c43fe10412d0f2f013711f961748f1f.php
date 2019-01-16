<?php $__env->startSection('title'); ?>
    <title>Categories</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('container-panel'); ?>
<h2 class="col-sm-2 offset-1">Categories</h2>
<div class="container">
<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Category Name</th>
                        <th width="25%">Category ID</th>
                        <th width="35%">Latin URL</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo e($category->name); ?></td>
                        <td><?php echo e($category->id); ?></td>
                        <td><?php echo e($category->latin_url); ?></td>
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