<?php $__env->startSection('content'); ?>
    <div class="container">
        <section class="my-5">
            <div class="p-3 bg-white rounded">
                <a class="btn btn-primary" href="<?php echo e(url('admin/categories/manage')); ?>">Create a New Category</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(isset($categories)): ?>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($key + 1); ?></th>
                                    <td><?php echo e($category['name']); ?></td>
                                    <td>
                                        <div><a href="<?php echo e(url('admin/categories/manage?id=' . $category['id'])); ?>"
                                                class="btn btn-primary">Edit</a></div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\blog-site-main\resources\views/admin/categories.blade.php ENDPATH**/ ?>