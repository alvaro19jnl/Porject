
<?php $__env->startSection('pageCurrent'); ?>

    <div>
        <form enctype="multipart/form-data" id="frmUploadImages" action="/fileUpload" method="post" >
            <input type="text" name="nombreImage">
            <br>
            <input type="file">
            <?php echo csrf_field(); ?>
            <br>
            <input type="submit" value="Enviar" >
        </form>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plataform', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\example-app\resources\views/upimage.blade.php ENDPATH**/ ?>