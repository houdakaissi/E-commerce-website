<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 card p-3">
           <strong> <h2 style="color:blue; " >Your cart</h2></strong>
            <table class="table table-hover">
                <thead  >
                    <tr  >
                        <th style="color:blue;"  >Image</th>
                        <th style="color:blue;">Title</th>
                        <th style="color:blue;">Qty</th>
                        <th style="color:blue;">Price</th>
                        <th style="color:blue;">Total</th>
                        <th style="color:blue;"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <img src="<?php echo e(asset($item->associatedModel->image)); ?>"
                                     alt="<?php echo e($item->title); ?>"
                                     width="50"
                                     height="50"
                                     class="img-fluid rounded"
                                >
                            </td>
                            <td >
                                <?php echo e($item->name); ?>

                            </td>
                            <td>
                                <form class="d-flex flex-row justify-content-center " action="<?php echo e(route("update.cart",$item->associatedModel->slug)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field("PUT"); ?>
                                    <div class="form-group">
                                        <input type="number" name="qty" id="qty"
                                            value="<?php echo e($item->quantity); ?>"
                                            placeholder="Quantité"
                                            max="<?php echo e($item->associatedModel->inStock); ?>"
                                            min="1"
                                            class="form-control"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <button style="width:35px;" type="submit" class="btn btn-sm btn-warning">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </div>
                                </form>
                            </td>
                            <td>
                                <?php echo e($item->price); ?> $
                            </td>
                            <td>
                                <?php echo e($item->price * $item->quantity); ?> $
                            </td>
                            <td>
                                <form class="d-flex flex-row justify-content-center align-items-center" action="<?php echo e(route("remove.cart",$item->associatedModel->slug)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field("DELETE"); ?>
                                    <div class="form-group">
                                        <button style="width:35px;"type="submit" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <tr class="text-dark font-weight-bold">
                        <td colspan="3" class="border border-success">
                            Total
                        </td>
                        <td colspan="3" class="border border-success">
                            <?php echo e(Cart::getSubtotal()); ?> $
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php if(Cart::getSubtotal() > 0): ?>
                <div class="form-group">
                    <a href="<?php echo e(route("make.payment")); ?>" class="btn btn-primary mt-3">
                        Payer <?php echo e(Cart::getSubtotal()); ?> $ via PayPal
                    </a>
                </div>
            <?php endif; ?> 
        
    

<a href="http://127.0.0.1:8000/" class="continue-shopping link-colored d-inline-block font-weight-bold my-3"> <i class="fa fa-arrow-left" aria-hidden="true"></i>Continuer mes achats</a>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>


 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/laravel-ecommerce-channel/resources/views/cart/index.blade.php ENDPATH**/ ?>