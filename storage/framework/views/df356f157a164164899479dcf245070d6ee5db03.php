<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | Edit</title>
    <link rel="stylesheet" href="<?php echo e(asset('style/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/style.css')); ?>">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item ">
              <a class="nav-link" href="/create">Create Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/product">View Products</a>
            </li>
             <li class="nav-item active">
              <a class="nav-link" href="/category/create">Create Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/category">View Category</a>
            </li>
          </ul>
        </div>
      </nav>
    <div class="container mt-5" style="width: 33%;">
       
        <form class="mb-4" action="<?php echo e(url('/product/update/'. $product->id)); ?>" method="POST">
            <?php echo method_field('patch'); ?>
            <?php echo e(csrf_field()); ?>

            
            <h1 class="text-center mb-4">Edit Product</h1>
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" class="form-control" required="required" name="nama_produk" value="<?php echo e($product->nama_produk); ?>">
            </div>
             <div class="form-group">
                <label for="">Category</label>
                <select class="form-control" name="id_ketegori">
                    <option>
                        -- Pilih Kategori --
                    </option>
                 <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fckr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($fckr->id_ketegori); ?>" name="id_ketegori">
                    <?php echo e($fckr->nama_kategori); ?>

                </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="number" class="form-control" required="required"  name="harga" value="<?php echo e($product->harga); ?>">
            </div>
            <div class="form-group">
                <label for="">Stock</label>
                <input type="number" class="form-control" required="required"   name="stok" value="<?php echo e($product->stok); ?>">
            </div>
            <input type="submit" id="btn-submit" class="btn btn-primary mt-3"value ="Update">
        </form>
       
    </div>
<script src="<?php echo e(asset('scripts/jquery-3.5.0.min.js')); ?>"></script>
<script src="<?php echo e(asset('scripts/bootstrap.min.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\kolaan\the-crud\resources\views/edit.blade.php ENDPATH**/ ?>