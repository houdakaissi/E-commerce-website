<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <?php echo $__env->make("layouts.sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-md-8">
            <div class="card p-3">
                <h3 class="card-title">Modifier le produit <?php echo e($product->title); ?></h3>
                <div class="card-body">
                    <form method="post" action="<?php echo e(route("products.update",$product->slug)); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="form-group">
                            <input type="text"
                            name="title"
                            placeholder="Title"
                            value="<?php echo e($product->title); ?>"
                            class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="description" placeholder="Description"
                                cols="30" rows="10" class="form-control"><?php echo e($product->description); ?></textarea>
                        </div>
                        <div class="form-group">
                            <input type="number"
                                name="price"
                                placeholder="Price"
                                value="$product->price"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="number"
                            name="old_price"
                            placeholder="Old Price"
                            value="$product->old_price"
                            class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="number"
                            name="inStock"
                            placeholder="In Stock"
                            value="$product->inStock"
                            class="form-control">
                        </div>
                        <div class="form-group">
                            <img src="<?php echo e(asset($product->image)); ?>" 
                            width="200"
                            height="200"
                            alt="<?php echo e($product->title); ?>">
</div>
                        <div class="form-group">
                            <input type="file"
                            name="image"
                            class="form-control">
                        </div>
                        <div class="form-group">
                            <select name="category_id" class="form-control">
                                <option value="" selected disabled>
                                    Choose a category
                                </option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option 
                                    <?php echo e($product->category_id === $category->id ? "selected" : ""); ?>

                                    value="<?php echo e($category->id); ?>">
                                        <?php echo e($category->title); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/laravel-ecommerce-channel/resources/views/admin/products/edit.blade.php ENDPATH**/ ?>