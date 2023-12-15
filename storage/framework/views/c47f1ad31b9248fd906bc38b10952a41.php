<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Category</title>
</head>
<body>
    <h1>"add category"</h1>
    <div class="mt-5 w-50" >
        <form action="category--add" method="post">
            <?php echo csrf_field(); ?>
            <div>
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
<br>
            <div class="mt-5">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\LSP_Assessment_BookEase\resources\views/category--add.blade.php ENDPATH**/ ?>