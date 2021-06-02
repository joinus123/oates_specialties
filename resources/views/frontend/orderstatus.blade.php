@include('frontend.include.header')
   <!-- end-header -->
      <!-- inner-banner -->
   
      <div class="banner">
                          
        <div class="col-md-12">
        <div class="sub-page-heading">
           <div class="container">
         <h2> Cart</h2>
        </div>
        </div>
 
     </div>
     </div>
<!-- end-inner-banner -->

<!-- whishlist -->
<section class="whishlist inner_padding">
<div class="whishlist-wrapper">
<div class="container">
<div class="row">
<div class="col-md-12 col-12"> 
<div class="table-responsive"> 
<table class="table table-hover text-center">
<thead>
<tr>
<th scope="col">Thumbnail</th>
<th scope="col">Product</th>
<th scope="col">Quantity</th>
<th scope="col">Price</th>
<th scope="col">Cart</th>  
<th scope="col">Remove</th>


</tr>
</thead>
<tbody>
<tr>
<td><img src="assets/images/seller-img2.png" class="img-fluid"></td>
<td>TAP™ ADVANCED COMMAND TRAINER</td>
<td>3</td>
<td>2</td>
<td><a href=""><i class="fa fa-shopping-cart"></i></a></td>
<td><a href="#"><i class="fa fa-trash-o"></i></a></td>


</tr>
<tr>
<td><img src="assets/images/seller-img2.png" class="img-fluid"></td>
<td>TAP™ ADVANCED COMMAND TRAINER</td>
<td>3</td>
<td>2</td>
<td><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></td>
<td><a href="#"><i class="fa fa-trash-o"></i></a></td>


</tr>    <tr>
<td><img src="assets/images/seller-img2.png" class="img-fluid"></td>
<td>TAP™ ADVANCED COMMAND TRAINER</td>
<td>3</td>
<td>2</td>
<td><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></td>
<td><a href="#"><i class="fa fa-trash-o"></i></a></td>


</tr>
</tbody>
</table> 
</div>
</div>
</div>
</div>
</div>
</section>
<!-- end-whishlist -->
<!-- footer -->
 @include('frontend.include.footer')