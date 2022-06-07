<?php $__env->startSection('content'); ?>
  
 
<div class="container">
    <div class="row justify-content-center">
      
             
        <td class="col-md-4">
            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</td>
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
        <table class="table table-hover">
<thead>
<tr>
<th>Id</th>
<th>Title</th>
 
<th>Actions</th>
 
 
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($category->id); ?></td>
<td><?php echo e($category->title); ?></td>
 
 
 
 
 
 
 
 
</td>
<td class="d-flex flex-row justify-content-center align-items-center">
<a
                href="<?php echo e(route("categories.edit", $category->slug)); ?>"
                class="btn byn-sm btn-warning my-2">
                    <i class="fa fa-edit"></i>
            </a>
<form id="<?php echo e($category->id); ?>" method="POST" action="<?php echo e(route("categories.destroy",$category->slug)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field("DELETE"); ?>
                                    <button
                                    onclick="event.preventDefault();
                                       if(confirm('Do you really want to delete <?php echo e($category->title); ?> ?'))
                                        document.getElementById(<?php echo e($category->id); ?>).submit();
                                    "
                                    class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
</td>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
 <hr>
 <div class="justify-content-center d-flex">

   <?php echo e($categories); ?>

</div>        
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/laravel-ecommerce-channel/resources/views/admin/categories/index.blade.php ENDPATH**/ ?>