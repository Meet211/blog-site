<div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Blogs Site</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo e(url('/')); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('admin/home')); ?>">Manage Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('admin/categories')); ?>">Manage Categories</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<?php /**PATH D:\blog-site-main\resources\views/components/header.blade.php ENDPATH**/ ?>