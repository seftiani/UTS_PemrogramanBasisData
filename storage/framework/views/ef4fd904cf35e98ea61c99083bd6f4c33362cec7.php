
<?php $__env->startSection('navbar2'); ?>
    

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
          
           <a href="add-book" class="btn btn-secondary">Tambah Buku</a>

            
            <br>
            <br>
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Judul Buku</th>
                        <th class="px-4 py-2">Tahun Terbit</th>
                        <th class="px-4 py-2">Stok</th>
                        <th class="px-4 py-2">Penulis</th>
                        <th class="px-4 py-2">Genre</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="border px-4 py-2"><?php echo e($row->judul); ?></td>
                            <td class="border px-4 py-2"><?php echo e($row->tahun); ?></td>
                            <td class="border px-4 py-2"><?php echo e($row->stok); ?></td>
                            <td class="border px-4 py-2"><?php echo e($row->penulis); ?></td>
                            <td class="border px-4 py-2"><?php echo $row->genre; ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\utslaravelcrud\resources\views/books.blade.php ENDPATH**/ ?>