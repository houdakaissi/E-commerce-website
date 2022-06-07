
  
<ul  class = "liste-groupe mb-3" >
<a  href = "{{ route( "admin.admins" )}} "   class = "list-group-item
        font-weight-gras
        liste-groupe-élément-action
    ">
    <i  class = "fa fa-chain" style="width:150px;" ></i>
   Dashboard
    </a> 
<a  href = "{{ route( "admin.orders" )}} "   class = "list-group-item
        font-weight-gras
        liste-groupe-élément-action
    ">
    <i  class = "fa fa-credit-card" style="width:150px;" ></i>
  Orders
    </a>  
    <a  href = "{{ route( "admin.users" )}} "   class = "list-group-item
        font-weight-gras
        liste-groupe-élément-action
    " >
    <i  class = "fa fa-cc-amex"  style="width:150px;"></i>
    Custumers
    </a>  

    <a  href = "{{route ("admin.categories")}}"   class = "list-group-item
        font-weight-gras
        liste-groupe-élément-action
    " >
    <i  class = "fa fa-adjust" style="width:150px;"> </i>
 Categories
    </a> 
    <a  href = "{{route ("admin.products")}}"   class = "list-group-item
        font-weight-gras
        liste-groupe-élément-action
    " >
    <i  class = "fa fa-list"> </i>
  Products
    </a>  

     
</ul>