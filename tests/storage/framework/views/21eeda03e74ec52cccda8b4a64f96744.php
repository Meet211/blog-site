<?php $__env->startSection('content'); ?>
    <div class="container">
        <section class="my-5 bg-white p-4 rounded">
            <form action="<?php echo e(url('admin/manage-blog/save')); ?>" method="POST" enctype="multipart/form-data"
                id="submit-form">
                <?php if($edit_blog != []): ?>
                    <input type="hidden" name="id" id="id" value="<?php echo e($edit_blog['id']); ?>">
                <?php endif; ?>
                <?php
                    $title = $edit_blog['title'] ?? '';
                    $description = $edit_blog['description'] ?? '';
                    $image = isset($edit_blog['image']) ? url('storage/' . $edit_blog['image']) : '';
                    $category_id = $edit_blog['category_id'] ?? '';
                    $read_time = $edit_blog['read_time'] ?? '';
                ?>
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="title" name="title"
                        value="<?php echo e($title); ?>">
                    <?php $__errorArgs = ['title'];
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
                    <label for="description" class="form-label">description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"><?php echo e($description); ?></textarea>
                    <?php $__errorArgs = ['description'];
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
                    <label for="read-time" class="form-label">Read time</label>
                    <input type="text" class="form-control" id="read-time" placeholder="5 min" name="read_time"
                        value="<?php echo e($read_time); ?>">
                    <?php $__errorArgs = ['read_time'];
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
                    <label for="category" class="form-label">Select Category</label>
                    <select class="form-select" aria-label="Default select example" id="category" name="category">
                        <option value="">select category</option>
                        <?php if(isset($categories)): ?>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category['id']); ?>"
                                    <?php echo e($category['id'] == $category_id ? 'Selected' : ''); ?>><?php echo e($category['name']); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </select>
                    <?php $__errorArgs = ['category'];
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
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" type="file" id="image" name="image">
                    <div class="img-box-200">
                        <img src="<?php echo e($image); ?>" alt="<?php echo e($title); ?>">
                    </div>
                    <?php $__errorArgs = ['image'];
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

<?php echo $__env->make('components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\blog-site-main\resources\views/admin/manage-blog.blade.php ENDPATH**/ ?>