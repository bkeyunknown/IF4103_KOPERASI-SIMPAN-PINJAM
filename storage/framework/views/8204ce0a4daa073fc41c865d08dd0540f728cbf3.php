<?php $__env->startSection('pojok_kanan'); ?>
    <?php echo e(Session::get('account')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<div class="kotakPinjam">
    <center><h1 style="font-size: 30px; font-family: sans-serif">Pinjam</h1></center>
    <form method="post" action="transaksi/pinjam">
        <?php echo e(csrf_field()); ?>

        <div class="posisi" id="formPinjam">
            Nominal uang yang akan dipinjam <br>
            Rp. <input type="text" name="jumlahUang" required id="ktkPinjam">
            <br> <br>
            <input id="tmbl" type="submit" value="Selesai">
        </div>
    </form>
</div>
            
            

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\IF4103_KOPERASI-SIMPAN-PINJAM\resources\views/pinjam.blade.php ENDPATH**/ ?>