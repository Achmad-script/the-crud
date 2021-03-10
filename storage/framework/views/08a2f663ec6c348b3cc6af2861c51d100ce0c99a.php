<?php $__env->startSection('title', 'Product'); ?>
<?php $__env->startSection('content'); ?>


          <h1>Product List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Product Name</th>
                     <th>Category</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                
                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fck): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($fck->nama_produk); ?></td>
                    <td><?php echo e($fck->category->nama_kategori); ?></td>
                    <td><?php echo e($fck->harga); ?></td>
                    <td><?php echo e($fck->stok); ?></td>
                   
                    <td>
                        <a href="/product/edit/<?php echo e($fck->id); ?>" class="btn btn-success">Edit</a>
                         <a href="/product/delete/<?php echo e($fck->id); ?>" class="btn btn-danger">Delete</a>
                        
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kolaan\the-crud\resources\views/product.blade.php ENDPATH**/ ?>