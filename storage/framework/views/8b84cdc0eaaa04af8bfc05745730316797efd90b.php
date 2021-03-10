
<?php $__env->startSection('title', 'Category'); ?>
<?php $__env->startSection('content'); ?>

  <h1>Category List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            
            <tbody>
                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $btch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($btch->nama_kategori); ?></td>
                    <td>
                         <a href="/category/delete/<?php echo e($btch->id); ?>" class="btn btn-danger">Delete</a>   
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </tbody>
        </table>

        <?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kolaan\the-crud\resources\views/category/view.blade.php ENDPATH**/ ?>