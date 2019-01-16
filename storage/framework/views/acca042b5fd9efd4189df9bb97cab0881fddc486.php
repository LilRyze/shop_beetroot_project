<?php $__env->startSection('container-panel'); ?>
<div class="card">
    <div class="card-body">
        Click accept button and your order will be ready!
    </div>
</div>

<a class="button" href="/shop">Accept</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>