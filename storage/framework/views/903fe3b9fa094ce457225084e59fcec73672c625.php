 <div style="position:absolute;top:630px;"> 
 <div style=" box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2);
 border: 2px  ;
  transition: 0.3s;
 width: 90%;
  height:380px;
  margin-left:30px;
  border-radius: 0px;"class="container">
   
   <?php $__currentLoopData = $products->reverse()->slice(0,4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
   
    <div style="width:200px;">

 
    <a href="<?php echo e(route("products.show",$product->slug)); ?>">
  <img style="width:50px;height:50px;"src="<?php echo e(asset($product->image)); ?>"></a>
 <span style="width:5px; font-size:12px;">
  <?php echo e($product->title); ?>

</span>
  <h3><strong><span style="position:relative; left:40px; color:#59981A;">
  <?php echo e($product->price); ?> MAD
 
</span></strong></h3>
 
 
        
  
 
  
  
  
</div>
 
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
  </div>
 <a href="<?php echo e(route('products.nouveau1')); ?>">
  <button style="margin-top:2px;margin-left:27px;border-color:black;  width:242px;height:40px;   border: 1px solid black;
  background-color: white;
  color: black;
  
  
  cursor: pointer;">Tout les nouveautés</button>
 
</a>
</div>
 
  <?php /**PATH /opt/lampp/htdocs/laravel-ecommerce-channel/resources/views/products/nouveau.blade.php ENDPATH**/ ?>