<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('page-name', 'dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <h1>ini halaman user</h1>

    <div class="upper-btn mt-3 d-flex justify-content-end">
        <a href="/user-registered" class="btn btn-primary me-3">
            <div><i class="bi bi-list-ul"></i>Registered users</div>
        </a>
        <a href="/user-deleted-list" class="btn btn-danger">
            <div><i class="bi bi-trash"></i>Deleted users</div>
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
                    <th>Username</th>
                    <th style="text-align: center">Phone</th>
                    <th style="text-align: center">Actions</th>
                </tr>
            </thead>
    
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                            <a style="color: white" href="/user-detail/<?php echo e($item->slug); ?>" class="btn btn-info col-3">
                                <i class="bi bi-info-circle"></i>Details</a>
                            <a href="/user-delete/<?php echo e($item->slug); ?>" class="btn btn-danger col-3">
                                <i class="bi bi-trash3"></i>Delete</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LSP_Assessment_BookEase\resources\views/user.blade.php ENDPATH**/ ?>