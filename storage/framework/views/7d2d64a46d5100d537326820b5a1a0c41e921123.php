 <?php $__env->slot('header', null, []); ?> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Data Buku
    </h2>
 <?php $__env->endSlot(); ?>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <?php if(session()->has('message')): ?>
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm"><?php echo e(session('message')); ?></p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <button wire:click="tambahbuku()" class="btn btn-success" class="text-green-500 font-bold py-2 px-4 rounded my-3" >Tambah Daftar Buku</button>
            <br>
            <br>
            <?php if($isModal): ?>
                <?php echo $__env->make('livewire.tambahbuku', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

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
                    <?php $__empty_1 = true; $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="border px-4 py-2"><?php echo e($row->judul_buku); ?></td>
                            <td class="border px-4 py-2"><?php echo e($row->tahun_terbit); ?></td>
                            <td class="border px-4 py-2"><?php echo e($row->stok); ?></td>
                            <td class="border px-4 py-2"><?php echo e($row->penulis); ?></td>
                            <td class="border px-4 py-2"><?php echo $row->genre; ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td class="border px-4 py-2 text-center" colspan="5">Tidak ada data</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\utslaravelcrud\resources\views/livewire/bukus.blade.php ENDPATH**/ ?>