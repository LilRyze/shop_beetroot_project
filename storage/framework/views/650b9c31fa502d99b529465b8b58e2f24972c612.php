<?php $__env->startSection('title'); ?>
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<title>Categories</title>
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('container-panel'); ?>
    <div class="container">
        <div class="row">
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="<?php echo e(Illuminate\Support\Facades\Storage::url($category->latin_url)); ?>.png" data-holder-rendered="true">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/category/<?php echo e($category->latin_url); ?>"><?php echo e($category->name); ?></a>
                            </button>
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