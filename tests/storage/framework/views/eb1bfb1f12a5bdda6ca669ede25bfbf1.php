<?php $__env->startSection('content'); ?>
    <div class="container">
        <section class="py-4">
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($index % 2 == 0): ?>
                    <div class="row mb-3 g-3">
                        <div class="col-md-8 col-12">
                            <div class="blog-card shadow">
                                <div class="row g-0">
                                    <div class="col-md-6 col-12">
                                        <div class="blog-img-box">
                                            <a href="<?php echo e(url('blogs/' . $blog['id'])); ?>" class="w-100 h-100">
                                                <?php
                                                    $img_style_1 = file_exists('storage/' . $blog['image'])
                                                        ? 'storage/' . $blog['image']
                                                        : asset('images/placeholder.png');
                                                ?>
                                                <img src="<?php echo e($img_style_1); ?>" class="card-img-top"
                                                    alt="<?php echo e($blog['title']); ?>">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 p-3">
                                        <p class="mb-2 text-danger text-uppercase fw-medium">
                                            <?php echo e($blog['category']['name'] ?? ''); ?></p>
                                        <p class="mb-2 text-muted fst-italic">Read time <?php echo e($blog['read_time']); ?> minutes</p>
                                        <a href="<?php echo e(url('blogs/' . $blog['id'])); ?>">
                                            <h4><?php echo e($blog['title']); ?></h4>
                                        </a>
                                        <p class="card-text text-ellipsis"><?php echo e($blog['description']); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php if(isset($blogs[$index + 1])): ?>
                            <div class="col-md-4 col-12">
                                <div class="blog-card shadow p-3">
                                    <p class="mb-2 text-danger text-uppercase fw-medium">
                                        <?php echo e($blogs[$index + 1]['category']['name'] ?? ''); ?></p>
                                    <p class="mb-2 text-muted fst-italic">Read time <?php echo e($blogs[$index + 1]['read_time']); ?>

                                        minutes
                                    </p>
                                    <a href="<?php echo e(url('blogs/' . $blogs[$index + 1]['id'])); ?>">
                                        <h4><?php echo e($blogs[$index + 1]['title']); ?></h4>
                                    </a>
                                    <p class="card-text text-ellipsis"><?php echo e($blogs[$index + 1]['description']); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\blog-site-main\resources\views/home.blade.php ENDPATH**/ ?>