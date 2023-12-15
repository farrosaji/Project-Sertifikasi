<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('page-name', 'dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <h1>ini halaman alat olahraga</h1>

    <div class="upper-btn mt-3 d-flex justify-content-end">
        <a href="equip-deleted" class="me-3 btn btn-primary">
            <div><i class="bi bi-arrow-left"></i>View Deleted Data</div>
        </a>
        <a href="equip-add" class="me-3 btn btn-primary">
            <div><i class="bi bi-plus-lg"></i>Alat olahraga baru</div>
        </a>
    
    </div>

    <?php if(session('status')): ?>
<div class="my-5 alert alert-success">
<?php echo e(session('status')); ?>

</div>  
<?php endif; ?>

<div class="my-5 table-list">
<table class="table table-hover">
    <thead>
        <tr>
            <th>No.</th>
            <th>Code</th>
            <th>Title</th>
            <th>Category</th>
            <th>Status</th>
            
            

            
        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $sportsequip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($item->equip_code); ?></td>
                <td><?php echo e($item->title); ?></td>
                <td>
                    <?php $__currentLoopData = $item->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($category->name); ?> </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
                <td><?php echo e($item->status); ?></td>
                <td style="text-align: center"><?php echo e($item->status); ?></td>
                <td style="text-align: center">
                    <a style="color: white" href="equip-edit/<?php echo e($item->slug); ?>" class="btn btn-info col-6 mb-2">
                        <i class="bi bi-pencil-square"></i>Edit</a>
                    <a href="equip-delete/<?php echo e($item->slug); ?>" class="btn btn-danger col-6">
                        <i class="bi bi-trash3"></i>Delete</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

</div>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LSP_Assessment_BookEase\resources\views/sportsequip.blade.php ENDPATH**/ ?>