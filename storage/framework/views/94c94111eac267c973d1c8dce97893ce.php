
 
<?php $__env->startSection('title', 'Delete Equipment'); ?>
 
<?php $__env->startSection('content'); ?>

<div>
    <h2>Delete Equipment</h2>
</div>

<div class="my-3 delete-btn">
    <strong class="d-flex justify-content-center align-items-center">
        Are you sure want to delete <?php echo e($sportsequip->title); ?> ?
    </strong>

    <div class="d-flex justify-content-center align-items-center">
        <a href="/equip-destroy/<?php echo e($sportsequip->slug); ?>" class="btn btn-danger col-3">Delete</a>
        <a href="/sportsequip" class="btn btn-primary col-3">Cancel</a>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LSP_Assessment_BookEase\resources\views/equip-delete.blade.php ENDPATH**/ ?>