
 
<?php $__env->startSection('title', 'Add equipment'); ?>
 
<?php $__env->startSection('content'); ?>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<div>
    <h2>Tambah Alat Olahraga</h2>
</div>

<div class="my-5 col-8 m-auto">

    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
        
    <?php endif; ?>

    <form action="equip-add" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div>
            <label for="Equip_code" class="form-label">Code</label>
            <input type="text" name="equip_code" id="equip_code" class="form-control" placeholder="Equip code"
            value="<?php echo e(old('equip_code')); ?>">
        </div>

        <div class="my-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder=" title"
            value="<?php echo e(old('title')); ?>">
        </div>

        <div class="my-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" id="cover" class="form-control" >
        </div>

        <div class="my-3">
            <label for="category" class="form-label">Category</label>
            <select name="categories[]" id="category" class="form-control select-multiple" multiple>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="my-3 edit-category-btn d-flex justify-content-center align-items-center">
            <button class="btn btn-success col-5" type="submit">Save</button>
            <a href="/book" class="btn btn-danger col-5">Cancel</a>
        </div>
        
    </form>

</div>


<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.select-multiple').select2();
    });
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LSP_Assessment_BookEase\resources\views/equip-add.blade.php ENDPATH**/ ?>