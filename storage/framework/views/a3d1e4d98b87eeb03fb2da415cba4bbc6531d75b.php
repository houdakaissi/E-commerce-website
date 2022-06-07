<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
 <div class="col-md-8">
     <div class="card"> 
       <h2>  Hello  <?php echo e(isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email); ?> !!</h2>
</div>
</div>
</div>
<div class="container">
    <div class="row justify-content-center">
      
             
        <div class="col-md-4">
        <div class="card">
                        <a href="<?php echo e(route("admin.admins")); ?>" style="text-decoration: none" >
                <div class="card bg-info text-white">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h3>Dashboard</h3>
                        <span class="font-weight-bold">
                         
                        </span>
                    </div>
                </div>
            </a>
                    </div>
        
            
                        <div class="card">
                        <a href="<?php echo e(route("admin.products")); ?>" style="text-decoration: none" >
                <div class="card bg-info text-white">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h3>Products</h3>
                        <span class="font-weight-bold">
                            <?php echo e($products->count()); ?>

                        </span>
                    </div>
                </div>
            </a>
                    </div>
                    <div class="col-md-13">
            <a href="<?php echo e(route("admin.orders")); ?>" style="text-decoration: none">
                <div class="card bg-danger text-white">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h3>Orders</h3>
                        <span class="font-weight-bold">
                            <?php echo e($orders->count()); ?>

                        </span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-13">
            <a href="<?php echo e(route("admin.users")); ?>" style="text-decoration: none">
                <div class="card bg-warning text-white">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h3>Custumers</h3>
                        <span class="font-weight-bold">
                            <?php echo e($users->count()); ?>

                        </span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-13">
            <a href="<?php echo e(route("admin.categories")); ?>" style="text-decoration: none">
                <div class="card bg-success text-white">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h3>Categories</h3>
                        <span class="font-weight-bold">
                            <?php echo e($categories->count()); ?>

                        </span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/laravel-ecommerce-channel/resources/views/admin/index.blade.php ENDPATH**/ ?>