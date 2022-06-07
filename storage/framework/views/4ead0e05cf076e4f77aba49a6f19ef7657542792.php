<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <?php echo $__env->make("layouts.sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-md-8">
            <div class="card p-3">
                <h3 class="card-title">Add new Admin</h3>
                <div class="card-body">
                    <form method="post" action="<?php echo e(route("admins.store")); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <input type="name"
                            name="name"
                            placeholder="name"
                            class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email"
                           password="email"
                            placeholder="email"
                            class="form-control">
                        </div>
                       
                        <div class="form-group">
                            <input type="password"
                           email="password"
                            placeholder="password"
                            class="form-control">
                        </div>
                         
                        
                         
                       
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/laravel-ecommerce-channel/resources/views/admin/admins/create.blade.php ENDPATH**/ ?>