@include('frontend.include.header')
   <!-- end-header -->
      <!-- inner-banner -->
      <div class="banner">
                          
        <div class="col-md-12">
        <div class="sub-page-heading">
           <div class="container">
           <h2>wish list</h2>
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
<th scope="col">Total</th>  
<th scope="col">Remove</th>


</tr>
</thead>
<tbody>
   @if(count(\Cart::getContent()) > 0)
    @foreach(\Cart::getContent() as $item)
    <tr>
      <td><img src="assets/images/seller-img2.png" class="img-fluid"></td>
      <td>{{$item->name}}</td>
      <td>{{$item->quantity}}</td>
      <td>{{$item->price}}</td>
      <td><a href="">{{ \Cart::get($item->id)->getPriceSum() }}</i></a></td>
      <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
      
      
      </tr>
    @endforeach
    @else
    <li class="list-group-item">Your Cart is Empty</li>
   @endif

    
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