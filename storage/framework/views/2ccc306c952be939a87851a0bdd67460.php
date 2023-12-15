<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookEase | <?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style> 
    .sidebar {
        background: rgb(11, 94, 88);
        color: white;
    }

    .sidebar a {
        color: #f0f0f0;
        text-decoration: none;
        display: block;
        padding: 20px 10px;
    }

    .sidebar a:hover {
        background: rgb(0, 0, 0);
    }

    .active {
        background: rgb(38, 38, 38);
        border-right: solid 10px orange;
    }
</style>

<body>

    <div class="main d-flex flex-column justify-content-between">
        <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">BookEase</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <div class="body-content align-items-stretch h-100">
            <div class="row d-flex g-0 h-100">
                <div style="height: auto" class="sidebar col-lg-2 collapse d-lg-block" id="navbarTogglerDemo03">
                    <?php if(Auth::user()): ?>
                        <?php if(Auth::user()->role_id == 1): ?>
                            <a href="/dashboard" <?php if(request()->route()->uri == 'dashboard'): ?>class="active" <?php endif; ?>>Dashboard</a>
                            
                            <a href="/sportsequip"
                            <?php if(request()->route()->uri == 'sportsequip' || 
                            request()->route()->uri == 'equip-add' ||
                            request()->route()->uri == 'equip-edit/{slug}' ||
                            request()->route()->uri == 'equip-delete/{slug}' ||
                            request()->route()->uri == 'equip-deleted-list' ||
                            request()->route()->uri == '/'): ?>
                                class="active"
                            <?php endif; ?>>Alat Olahraga</a>

                            <a href="/categories"
                            <?php if(request()->route()->uri == 'category' || 
                            request()->route()->uri == 'category-add' ||
                            request()->route()->uri == 'category-edit/{slug}' ||
                            request()->route()->uri == 'category-delete/{slug}' ||
                            request()->route()->uri == 'category-deleted-list'): ?>
                                class="active"
                            <?php endif; ?>>Categories</a>
                            
                            <a href="/users" 
                            <?php if(request()->route()->uri == 'user' ||
                            request()->route()->uri == 'user-registered' ||
                            request()->route()->uri == 'user-detail/{slug}' ||
                            request()->route()->uri == 'user-approve/{slug}' ||
                            request()->route()->uri == 'user-delete/{slug}' ||
                            request()->route()->uri == 'user-deleted-list'): ?>
                                class="active"
                            <?php endif; ?>>Users</a>

                            <a href="/rent-log" 
                        <?php if(request()->route()->uri == 'rent-log'): ?>
                            class="active"
                        <?php endif; ?>>Rent Logs</a>

                        <a href="/logout" 
                        <?php if(request()->route()->uri == 'logout'): ?>
                            class="active"
                        <?php endif; ?>>Logout</a>

                        <?php else: ?>
                            <a href="/profile" 
                            <?php if(request()->route()->uri == 'profile'): ?>
                                class="active"
                            <?php endif; ?>>Profile</a>

                            <a href="/" 
                            <?php if(request()->route()->uri == '/'): ?>
                                class="active"
                            <?php endif; ?>>Sport Equip</a>

                            <a href="logout">Logout</a>
                        <?php endif; ?>
                    <?php else: ?>
                        <a href="/login">Log In</a>
                    <?php endif; ?>

                </div>
                <div class="content p-4 col-lg-10 ">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\LSP_Assessment_BookEase\resources\views/layouts/mainlayout.blade.php ENDPATH**/ ?>