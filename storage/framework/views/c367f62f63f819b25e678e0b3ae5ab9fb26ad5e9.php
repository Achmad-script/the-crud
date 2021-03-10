<?php $__env->startSection('title', 'Product | Input'); ?>
<?php $__env->startSection('content'); ?>

<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <ul>
        <h3>Wajib Diisi Kaya Pahala lu! </h3>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <li>

        <?php echo e($error); ?></li>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>
        
           <div class="container mt-5" style="width: 44%;">
        <form class="mb-4" action="/store" method="POST">
            <?php echo csrf_field(); ?>
            <h1 class="text-center mb-4">Create Product</h1>
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" class="form-control"name="nama_produk">
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <select class="form-control" name="id_ketegori">
                    <option>
                        -- Pilih Kategori --
                    </option>
                 <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fckr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($fckr->id); ?>" name="id_ketegori">
                    <?php echo e($fckr->nama_kategori); ?>

                </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="number" class="form-control" name="harga">
            </div>
            <div class="form-group">
                <label for="">Stock</label>
                <input type="number" class="form-control" name="stok">
            </div>
            <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kolaan\the-crud\resources\views/create.blade.php ENDPATH**/ ?>