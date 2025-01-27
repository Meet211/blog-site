<?php $__env->startSection('content'); ?>
    <div class="container">
        <section class="my-5 bg-white p-3 rounded">
            <div class="">
                <h3>Blogs</h3>
                <a class="btn btn-primary" href="<?php echo e(url('admin/home/create')); ?>">Create a New Blog</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">image</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php if(isset($blogs)): ?>
                            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $img = file_exists('storage/' . $blog['image'])
                                        ? url('storage/' . $blog['image'])
                                        : asset('images/placeholder.png');
                                ?>
                                <tr>
                                    <th scope="row"><?php echo e($key + 1); ?></th>
                                    <td><?php echo e($blog['title']); ?></td>
                                    <td>
                                        <div class="img-box-200"><img src="<?php echo e($img); ?>" alt="<?php echo e($blog['title']); ?>"
                                                srcset=""></div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center gap-2"><a
                                                href="<?php echo e(url('admin/home/create?id=' . $blog['id'])); ?>"
                                                class="btn btn-primary">Edit</a>
                                            <button class="btn btn-danger delete_blog" data-id="<?php echo e($blog['id']); ?>">
                                                Delete</button>
                                        </div>
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

<?php echo $__env->make('components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\blog-site-main\resources\views/admin/home.blade.php ENDPATH**/ ?>