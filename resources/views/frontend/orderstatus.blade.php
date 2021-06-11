@include('frontend.include.header')
<!-- end-header -->
<!-- inner-banner -->
<div class="banner">
   <div class="col-md-12">
      <div class="sub-page-heading">
         <div class="container">
            <h2>Cart  List</h2>
         </div>
      </div>
   </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ success_msg }}</strong>
</div>
<br>
@endif
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
                           <td><img src="{{asset('storage/media/'.$item->attributes->img)}}"></td>
                           <td>{{$item->name}}</td>
                           <td>{{$item->quantity}}</td>
                           </td>
                           <td>${{$item->price}}</td>
                           <td><a href="">${{ \Cart::get($item->id)->getPriceSum() }}</i></a></td>
                           <td><a href="{{route('cart.remove',[$item->id])}}"><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                        @endforeach
                        @else
                        <li class="list-group-item">Your Cart is Empty</li>
                        @endif
                     </tbody>
                  </table>
               </div>
               <div class="check-out-btn float-right mt-4">
                  <a href="{{route('checkout')}}" class="checkout-btn">proceed checkout</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end-whishlist -->
<!-- footer -->
@include('frontend.include.footer')
