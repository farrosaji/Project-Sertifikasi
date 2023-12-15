
 
<?php $__env->startSection('title', 'Delete user'); ?>
 
<?php $__env->startSection('content'); ?>

<div>
    <h2>Delete user</h2>
</div>

<div class="my-3 delete-btn">
    <strong class="d-flex justify-content-center align-items-center">
        Are you sure want to delete user <?php echo e($users->username); ?> ?
    </strong>

    <div class="d-flex justify-content-center align-items-center">
        <a href="/user-destroy/<?php echo e($users->slug); ?>" class="btn btn-danger col-3">Delete</a>
        <a href="/users" class="btn btn-primary col-3">Cancel</a>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LSP_Assessment_BookEase\resources\views/user-delete.blade.php ENDPATH**/ ?>