<?php $__env->startSection('content'); ?>
  
 
<div class="container">
    <div class="row justify-content-center">
      
    <td class="col-md-4">
            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <div>     
       
        <div class="col-md-8">
        <a
                href="<?php echo e(route("products.create")); ?>"
                class="btn btn-primary my-2">
                Add new product
                    <i class="fa fa-plus"></i>
            </a>
            <a
                href="<?php echo e(route("admins.create")); ?>"
                class="btn btn-primary my-2">
                Add new Admin
                    <i class="fa fa-plus"></i>
            </a>
        <table class="table table-hover" style="width:700px;">
<thead>
<tr>
<th>Id</th>
<th>Nom</th>
<th>Email</th>
<th>Actions</th>
 
 
<th></th>
<th></th>
 
 
</tr>
</thead>
<tbody>
<?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($admin->id); ?></td>
<td><?php echo e($admin->name); ?></td>
 
<td><?php echo e($admin->email); ?> </td>
 
 
 
 
 
 
 
 
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>

 <hr>
 <div class="justify-content-center d-flex">

   <?php echo e($admins); ?>

</div>        
        </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/laravel-ecommerce-channel/resources/views/admin/admins/index.blade.php ENDPATH**/ ?>