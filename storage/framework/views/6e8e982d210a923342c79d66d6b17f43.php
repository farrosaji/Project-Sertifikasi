<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('page-name', 'dashboard'); ?>

<?php $__env->startSection('content'); ?>
   
    <h3>Welcome, <?php echo e(Auth::user()->username); ?></h3>

    <div class="row my-5">
        <div class="col-lg-4">
            <div class="card-data equipment">
                <div class="row">
                    <div class="col-6"><i class="bi bi-calendar3"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">sportsequip</div>
                        <div class="card-count"><?php echo e($equipment_count); ?></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="card-data category">
                <div class="row">
                    <div class="col-6"><i class="bi bi-list-task"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">categories</div>
                        <div class="card-count"><?php echo e($category_count); ?></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card-data user">
                <div class="row">
                    <div class="col-6"><i class="bi bi-people-fill"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">users</div>
                        <div class="card-count"><?php echo e($user_count); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h3>#Rent Log</h3>

        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Users.</th>
                    <th>Equipments</th>
                    <th>Rent Date</th>
                    <th>Return Date</th>
                    <th>Actual Return Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="7" style="text-align: center">No Data Yet!</td>
                </tr>
            </tbody>
        </table>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LSP_Assessment_BookEase\resources\views/dashboard.blade.php ENDPATH**/ ?>