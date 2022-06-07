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
                        <th>Client</th>
                        <th>Produit</th>
                        <th>Qté</th>
                        <th>Prix</th>
                        <th>Total</th>
                        <th>Payé</th>
                        <th>Livrée</th>
                        <th>Actions</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($order->id); ?></td>
                            <td><?php echo e($order->user->name); ?></td>
                           
                            <td><?php echo e($order->product_name); ?></td>
                            <td><?php echo e($order->qty); ?> DH</td>
                            <td><?php echo e($order->price); ?> DH</td>
                            <td><?php echo e($order->total); ?> DH</td>
                            <td>
                                <?php if($order->paid  ): ?>
                                    <i class="fa fa-check text-success"></i>
                                <?php else: ?>
                                    <i class="fa fa-times text-danger"></i>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if($order->delivered ): ?>
                                    <i class="fa fa-check text-success"></i>
                                <?php else: ?>
                                    <i class="fa fa-times text-danger"></i>
                                <?php endif; ?>
                            </td>
                            <td class="d-flex flex-row justify-content-center align-items-center">
                                <form method="POST" action="<?php echo e(route("orders.update",$order->id)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field("PUT"); ?>
                                    <button class="btn btn-sm btn-success">
                                        <i class="fa fa-check"></i>
                                    </button>
                                </form>
                                <form id="<?php echo e($order->id); ?>" method="POST" action="<?php echo e(route("orders.destroy",$order->id)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field("DELETE"); ?>
                                    <button
                                    onclick="event.preventDefault();
                                       if(confirm('Do you really want to delete the order <?php echo e($order->id); ?> ?'))
                                        document.getElementById(<?php echo e($order->id); ?>).submit();
                                    "
                                    class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                                 
</td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <hr>
            <div class="justify-content-center d-flex">
                <?php echo e($orders); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/laravel-ecommerce-channel/resources/views/admin/orders/index.blade.php ENDPATH**/ ?>