
<?php $__env->startSection('title', 'Category | Input'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container mt-5" style="width: 44%;">
        <form class="mb-4" action="/category/store" method="POST">
            <?php echo csrf_field(); ?>
            <h1 class="text-center mb-4">Create Category</h1>
            <div class="form-group">
                <label for="">Category Name</label>
                <input type="text" class="form-control" name="nama_kategori">
            </div>
            <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kolaan\the-crud\resources\views/category/create.blade.php ENDPATH**/ ?>