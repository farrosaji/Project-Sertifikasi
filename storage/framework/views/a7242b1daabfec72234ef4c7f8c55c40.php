
 
<?php $__env->startSection('title', 'Registered Users'); ?>
 
<?php $__env->startSection('content'); ?>

<div>
    <h2>List of Registered Users</h2>
</div>

<div class="upper-btn my-5 d-flex justify-content-end">
    <a href="/users" class="btn btn-primary">
        <div><i class="bi bi-arrow-left"></i>List of Users</div>
    </a>
</div>

<div class="my-5 table-list">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Username</th>
                <th style="text-align: center">Phone</th>
                <th style="text-align: center">Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $registeredUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($item->username); ?></td>
                    <td style="text-align: center">
                        <?php if($item->phone ): ?>
                            <?php echo e($item->phone); ?>

                            
                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </td>
                    <td style="text-align: center">
                        <a style="color: white" href="/user-detail/<?php echo e($item->slug); ?>" class="btn btn-info col-4">
                            <i class="bi bi-info-circle"></i>Details</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LSP_Assessment_BookEase\resources\views/user-registered.blade.php ENDPATH**/ ?>