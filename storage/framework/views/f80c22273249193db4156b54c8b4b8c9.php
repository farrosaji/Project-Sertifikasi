
 
<?php $__env->startSection('title', 'User detail'); ?>
 
<?php $__env->startSection('content'); ?>

<div>
    <h2>Detail user : <?php echo e($users->username); ?></h2>
</div>

<div class="upper-btn my-5 d-flex justify-content-end">
    <?php if($users->status == 'inactive'): ?>
    <a href="/user-approve/<?php echo e($users->slug); ?>" class="btn btn-success">
        <div><i class="bi bi-check-lg"></i>Approve user</div>
    </a>
    <?php else: ?>
    <a href="/users" class="btn btn-primary">
        <div><i class="bi bi-arrow-left"></i>List of Users</div>
    </a>
    <?php endif; ?>
    
</div>

<?php if(session('status')): ?>
<div class="my-5 alert alert-success">
    <?php echo e(session('status')); ?>

</div>  
<?php endif; ?>

<div class="my-5">
    <table class="table table-bordered">
        <tr>
            <th>Username</th>
            <td><?php echo e($users->username); ?></td>
        </tr>

        <tr>
            <th>Phone</th>
            <td>
                <?php if($users->phone ): ?>
                    <?php echo e($users->phone); ?>

                
                <?php else: ?>
                    -
                <?php endif; ?>
            </td>
        </tr>

        <tr>
            <th>Address</th>
            <td><?php echo e($users->address); ?></td>
        </tr>

        <tr>
            <th>Status</th>
            <td><?php echo e($users->status); ?></td>
        </tr>

        <tr>
            <th>Logs</th>
            <td>    
                
            </td>
        </tr>
    </table>


</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LSP_Assessment_BookEase\resources\views/user-detail.blade.php ENDPATH**/ ?>