
 
<?php $__env->startSection('title', 'Deleted equipment'); ?>
 
<?php $__env->startSection('content'); ?>

<div>
    <h2>Deleted Equipment</h2>
</div>

<?php if(session('status')): ?>
<div class="my-5 alert alert-success">
    <?php echo e(session('status')); ?>

</div>  
<?php endif; ?>

<div class="upper-btn my-5 d-flex justify-content-end">
    <a href="/sportsequip" class="btn btn-primary">
        <div><i class="bi bi-arrow-left"></i>Equipment list</div>
    </a>
</div>

<div class="my-5 deleted-list">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Code</th>
                <th>Title</th>
                <th style="text-align: center">Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $deletedEquip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($item->equip_code); ?></td>
                    <td><?php echo e($item->title); ?></td>
                    <td style="text-align: center">
                        <a href="/equip-restore/<?php echo e($item->slug); ?>" class="btn btn-secondary col-5">
                            <i class="bi bi-arrow-counterclockwise"></i>Restore</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LSP_Assessment_BookEase\resources\views/equip-deleted-list.blade.php ENDPATH**/ ?>