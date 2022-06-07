
  
<ul  class = "liste-groupe mb-3" >
<a  href = "<?php echo e(route( "admin.admins" )); ?> "   class = "list-group-item
        font-weight-gras
        liste-groupe-élément-action
    ">
    <i  class = "fa fa-chain" style="width:150px;" ></i>
   Dashboard
    </a> 
<a  href = "<?php echo e(route( "admin.orders" )); ?> "   class = "list-group-item
        font-weight-gras
        liste-groupe-élément-action
    ">
    <i  class = "fa fa-credit-card" style="width:150px;" ></i>
  Orders
    </a>  
    <a  href = "<?php echo e(route( "admin.users" )); ?> "   class = "list-group-item
        font-weight-gras
        liste-groupe-élément-action
    " >
    <i  class = "fa fa-cc-amex"  style="width:150px;"></i>
    Custumers
    </a>  

    <a  href = "<?php echo e(route ("admin.categories")); ?>"   class = "list-group-item
        font-weight-gras
        liste-groupe-élément-action
    " >
    <i  class = "fa fa-adjust" style="width:150px;"> </i>
 Categories
    </a> 
    <a  href = "<?php echo e(route ("admin.products")); ?>"   class = "list-group-item
        font-weight-gras
        liste-groupe-élément-action
    " >
    <i  class = "fa fa-list"> </i>
  Products
    </a>  

     
</ul><?php /**PATH /opt/lampp/htdocs/laravel-ecommerce-channel/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>