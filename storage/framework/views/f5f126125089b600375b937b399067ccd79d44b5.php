<?php $__env->startSection('title'); ?>
    <title>Actions with Users</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('container-panel'); ?>
    <h3>Actions with Users</h3>
    <br>
    <div class="container">
        <div class="row">
            <a href="/action_users/create_user"><button type="button" class="btn btn-dark">Create User</button></a>
        </div>
        <br>
        <div class="row">
            <a href="/action_users/show_users"><button type="button" class="btn btn-dark">Show Users</button></a>
        </div>
        <br>
        <div class="row">
            <a href="/action_users/delete_user"><button type="button" class="btn btn-dark">Delete User</button></a>
        </div>
        <br>
        <div class="row">
            <a href="/action_users/edit_user"><button type="button" class="btn btn-dark">Edit Users</button></a>
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