
<?php $__env->startSection('title', 'SportsEquip'); ?>
<?php $__env->startSection('content'); ?>

<form action="" method="get">
    <div class="row">
        <div class="col-12 col-sm-6">
            <select name="category" id="category" class="form-control">
                <option value="">Select category</option>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="col-12 col-sm-6">
            <div class="input-group mb-3">
                <input type="text" name="title" class="form-control" placeholder="Title">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </div>
    </div>
</form>

<div class="my-5">
    <div class="row">
        <?php $__currentLoopData = $sportsequip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="mb-3 col-lg-3 col-md-4 col-sm-6">
                <div class="card h-100">
                    <img src="<?php echo e($item->cover != null ? asset('storage/cover/'.$item->cover) : asset('images/cover-not-available.jpg')); ?>" class="card-img-top" alt="..." draggable="false">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($item->title); ?></h5>
                        <p class="card-text"><?php echo e($item->equip_code); ?></p>
                        <ul class="card-text">
                            <?php $__currentLoopData = $item->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($category->name); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <p class="fw-bold card-text text-end <?php echo e($item->status == 'In stock' ? 'text-success' : 'text-danger'); ?>">
                            <?php echo e($item->status); ?>

                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LSP_Assessment_BookEase\resources\views/equip-list.blade.php ENDPATH**/ ?>