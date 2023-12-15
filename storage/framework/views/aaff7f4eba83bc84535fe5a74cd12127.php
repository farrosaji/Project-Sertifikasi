<?php $__env->startSection('title', 'Delete Category'); ?>

<?php $__env->startSection('content'); ?>
   <h2>Are you sure about deleting the category "<?php echo e($category->name); ?>"?</h2>
   <div>
    <a href="/category-destroy/<?php echo e($category->slug); ?>" class='btn btn-danger me-4'>Delete Category</a>
    <a href="/categories" class='btn btn-info'>Cancel Deletion</a>
   </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LSP_Assessment_BookEase\resources\views/category-delete.blade.php ENDPATH**/ ?>