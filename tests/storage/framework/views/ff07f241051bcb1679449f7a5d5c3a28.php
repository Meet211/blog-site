<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="cs-blog-detail">
            <div class="cs-main-post">
                <figure>
                    <?php
                        $img_style_1 = file_exists('storage/' . $blog->image)
                            ? url('storage/' . $blog->image)
                            : asset('images/placeholder.png');
                    ?>
                    <img src="<?php echo e($img_style_1); ?>" alt="<?php echo e($blog->title); ?>" class="img-fluid"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                </figure>
            </div>

            <div class="cs-post-title">

                <div class="post-option mt-2">
                    <span class="post-date"><i class="cs-color icon-calendar6"></i> <?php echo e($blog->created_at->format('M d, Y')); ?>


                    </span>
                </div>
            </div>

            <div class="cs-post-option-panel">
                <h1><?php echo e($blog->title); ?></h1>
                <div class="rich-editor-text mt-3">
                    <p><?php echo e($blog->description); ?></p>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\blog-site-main\resources\views/blog-details.blade.php ENDPATH**/ ?>