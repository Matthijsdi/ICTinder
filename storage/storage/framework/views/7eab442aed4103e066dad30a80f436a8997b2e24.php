

<?php $__env->startSection('title', 'AdminLTE'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Profiel aanpassen</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form action="profielpagina" method="post">
        Name: <input type="text" name="name" value="oude naam inladen van database"><br>
        ?: <input type="text" name="" value="oude"><br>
        ?: <input type="text" name="" value="info"><br>
        ?: <input type="text" name="" value="inladen"><br>
        ?: <input type="text" name="" value="van"><br>
        ?: <input type="text" name="" value="database"><br>
        <input type="submit">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>