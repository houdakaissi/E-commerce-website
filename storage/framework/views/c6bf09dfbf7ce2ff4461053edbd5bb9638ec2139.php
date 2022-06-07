 
<?php if($errors->all()): ?>
 <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <div class="alert alert-danger">
     <?php echo e($error); ?>

</div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if(session()->has("success")): ?>
  <div class="alert alert-success alert-dismissible fade show">
    <strong><?php echo e(session()->get("successs")); ?></strong>
    <button type="button" class="close">
        <span>&times;</span>
    </button> 
  </div>
<?php endif; ?>
 

<?php if(session()->has("warning")): ?>
<div class="alert alert-warning alert-dismissible fade show">
    <strong><?php echo e(session()->get("warning")); ?></strong>
    <button type="button" class="close">
        <span>&times;</span>
</button> 
</div>
<?php endif; ?> 


<?php if(session()->has("errorLink")): ?>
<div class="alert alert-danger alert-dismissible fade show">
    <strong>{!! session()->get("errorLink") !! }</strong>
    <button type="button" class="close">
        <span>&times;</span>
</button> 
</div>
 <?php endif; ?>

<?php if(session()->has("info")): ?>
<div class="alert alert-info alert-dismissible fade show">
    <strong><?php echo e(session()->get("info")); ?></strong>
    <button type="button" class="close">
        <span>&times;</span>
</button> 
</div>
 <?php endif; ?>
 nnnn<?php /**PATH /opt/lampp/htdocs/laravel-ecommerce-channel/resources/views/layouts/alerts.blade.php ENDPATH**/ ?>