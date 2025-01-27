<?php $__env->startSection('content'); ?>
    <div class="container">
        <section class="my-5">
            <form action="<?php echo e(url('admin/categories/manage/save')); ?>" method="POST" id="submit-form">
                <?php if($edit_category != []): ?>
                    <input type="hidden" name="id" id="id" value="<?php echo e($edit_category['id']); ?>">
                <?php endif; ?>
                <?php
                    $name = $edit_category['name'] ?? '';
                ?>
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Category name" name="name"
                        value="<?php echo e($name); ?>">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary mb-3">Save</button>
                </div>
            </form>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\blog-site-main\resources\views/admin/manage-category.blade.php ENDPATH**/ ?>