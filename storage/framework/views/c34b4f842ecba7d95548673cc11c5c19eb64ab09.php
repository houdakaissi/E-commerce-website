<?php $__env->startSection('content'); ?>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-4">
<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<div class="col-md-8">
<a
                href="<?php echo e(route("products.create")); ?>"
                class="btn btn-primary my-2">
               Add new product 
                    <i class="fa fa-plus"> </i>
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
<th>Titre</th>
<th>Description</th>
<th>inStock</th>
<th>Prix</th>
<th>Disponible</th>
<th>Image</th>
<th>Catégorie</th>
<th>Actions</th>
<th></th>
</tr>
</thead>
<tbody>
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($product->id); ?></td>
<td><?php echo e($product->title); ?></td>
<td><?php echo e(Str::limit($product->description,50)); ?></td>
<td><?php echo e($product->inStock); ?> </td>
<td><?php echo e($product->price); ?> DH</td>
<td> <img src="<?php echo e(asset($product->image)); ?>"
alt="<?php echo e($product->title); ?>" 
width="70"
height="50"
class="img-fluid rounded">
</td>
<td>
<?php if($product->inStock >0 ): ?>
<i class="fa fa-check text-success"></i>
<?php else: ?>
<i class="fa fa-times text-danger"></i>
<?php endif; ?>
</td>
<td>
<?php echo e($product->category->title); ?> 
</td>
<td class="d-flex flex-row justify-content-center align-items-center">
<a
                href="<?php echo e(route("products.edit", $product->slug)); ?>"
                class="btn byn-sm btn-warning my-2">
                    <i class="fa fa-edit"></i>
            </a>
<form id="<?php echo e($product->id); ?>" method="POST" action="<?php echo e(route("products.destroy",$product->slug)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field("DELETE"); ?>
                                    <button
                                    onclick="event.preventDefault();
                                       if(confirm('Do you really want to delete <?php echo e($product->title); ?> ?'))
                                        document.getElementById(<?php echo e($product->id); ?>).submit();
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
<?php echo e($products); ?>

</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/laravel-ecommerce-channel/resources/views/admin/products/index.blade.php ENDPATH**/ ?>