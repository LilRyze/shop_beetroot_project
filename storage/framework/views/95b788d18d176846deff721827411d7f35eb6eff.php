<?php $__env->startSection('title'); ?>
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
    <title>Goods</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('container-panel'); ?>
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $goods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $good): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" style="height: 275px; width: 100%; display: block;" src="<?php echo e(Illuminate\Support\Facades\Storage::url($good->latin_url)); ?>.png" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text"><?php echo e(substr($good->description, 0, 150)); ?>...</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/goods/<?php echo e($good->latin_url); ?>"><?php echo e($good->name); ?></a></button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo e($good->price); ?> $</button>
                                            </div>

                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>