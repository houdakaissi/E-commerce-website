<div style="position:absolute;top:1200px;"> 
 <div style=" box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
 width: 90%;
  height:380px;
  margin-left:30px;
  border-radius: 0px;"class="container">
   
   <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
   
    <div style="width:200px;">

  <?php if($product->id == 13 ): ?>
  <a href="<?php echo e(route("products.show",$product->slug)); ?>">
  <img style="width:50px;height:50px;"src="<?php echo e(asset($product->image)); ?>"></a>
 <span style="width:5px;font-size:12px;">
  <?php echo e($product->title); ?>

</span>
  <h3><strong><span style="position:relative; left:40px; color:#59981A;">
  <?php echo e($product->price); ?> MAD
 
</span></strong></h3>
 <?php endif; ?>
 <?php if($product->id == 46 ): ?>
   <a href="<?php echo e(route("products.show",$product->slug)); ?>">
   <img style="width:50px;height:50px;"src="<?php echo e(asset($product->image)); ?>"></a>
  <span style="width:5px;font-size:12px;">
   <?php echo e($product->title); ?>

 </span>
   <h3><strong><span style="position:relative; left:40px; color:#59981A;">
   <?php echo e($product->price); ?> MAD
  
 </span></strong></h3>
  <?php endif; ?>
        
  <?php if($product->id == 50 ): ?>
  <a href="<?php echo e(route("products.show",$product->slug)); ?>">
   <img style="width:50px;height:50px;"src="<?php echo e(asset($product->image)); ?>"></a>
  <span style="width:5px;font-size:12px;">
   <?php echo e($product->title); ?>

 </span>
   <h3><strong><span style="position:relative; left:40px; color:#59981A;">
   <?php echo e($product->price); ?> MAD
  
 </span></strong></h3>
  <?php endif; ?> 
  <?php if($product->id == 51 ): ?>
  <a href="<?php echo e(route("products.show",$product->slug)); ?>">
   <img style="width:50px;height:50px;"src="<?php echo e(asset($product->image)); ?>"></a>
  <span style="width:5px; font-size:12px;">
   <?php echo e($product->title); ?>

 </span>
   <h3><strong><span style="position:relative; left:40px; color:#59981A;">
   <?php echo e($product->price); ?> MAD
  
 </span></strong></h3>
  <?php endif; ?>
  
  
  
</div>
 
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
  </div>
 <a href="<?php echo e(route('products.promo1')); ?>">
  <button  style="margin-top:2px;margin-left:25px; border-color:black;  width:242px;height:40px;   border: 1px solid black;
  background-color: white;
  color: black;
  
  
  cursor: pointer; ">Tout les promotions</button>
</a>
 
</div>
 
  <?php /**PATH /opt/lampp/htdocs/laravel-ecommerce-channel/resources/views/products/promo.blade.php ENDPATH**/ ?>