@include('frontend.include.header')
  <!-- end-logo-search -->
  <section class="all-product">
    <div class="banner">
       
     
 <div class="col-md-12">
 <div class="sub-page-heading">
    <div class="container">
    <h2><?php echo isset($Category_id)?$Category_id[0]['category_name']."--".(count($product)):'All products'?></h2>
 </div>
 </div>

</div>
</div>

<div class="container">
<!--             <div class="col-md-12">
<div class="heading text-center spacing">
<h2>all Products</h2>
</div>
</div> -->
<div class="row">
<div class="col-md-3">
<div class="product-list list-hover">
<div class="search-box">
    <input type="search" name="search" class="input-search col-12" placeholder="Search">
    <i class="fa fa-search search-btn"></i>
 </div>
 @foreach($Categorys as $Category)
<ul>
 <li><a href="{{route('productcategory',[$Category->id])}}">{{$Category->category_name}} <span></span></a></li>

</ul>
@endforeach
</div>
</div>
<div class="col-md-9">
<div class="row">

   @foreach($product as $view)
   <div class="col-md-4">
  
    <div class="product-grid5">
      <div class="product-image5">
          <a href="#">
          <img class="pic-1" src="{{asset('storage/media/'.$view->image)}}">
          <img class="pic-2" src="{{asset('storage/media/'.$view->image)}}">
          </a>
          <ul class="social">
             <!-- <li><a href="product-detail.html" data-tip="Quick View"><i class="fa fa-search"></i></a></li> -->
             <!-- <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li> -->
           
             <form action="{{ route('cart.store') }}" id="myForm" method="POST">
               {{ csrf_field() }}
               <input type="hidden" value="{{$view->id}}" id="id" name="id">
               <input type="hidden" value="{{$view->name}}" id="name" name="name">
               <input type="hidden" value="{{$view->price}}" id="price" name="price">
               <input type="hidden" value="{{$view->image}}" id="image" name="image">
               <input type="hidden" value="1" id="quantity" name="quantity">
               <div class="card-footer" style="background-color: rgb(255, 255, 255);">
                     <div class="row">
                        
                        <li>
                           <button type="submit" class="add_to_cart_btn"  title="add to cart" data-tip="Add to Cart">
                              <i class="fa fa-shopping-cart"></i> </button>
                           {{-- <a onclick="mySubmit();"  id="myForm" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a> --}}
                        </li>
                      
                   </div>
               </div>
           </form>
          
           {{-- <script type="text/javascript">
            function mySubmit(){
            document.getElementById("myForm").submit();
         }
      </script> --}}
          </ul>
         
          <!-- <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a> -->
       </div>
       <div class="product-content">
          <h3 class="title"><a href="product-detail.php">{{$view->name}}</a></h3>
          <div class="price">${{$view->price}}-${{$view->discounted_price}}</div>
       </div>
    </div>
   
   </div>
   @endforeach

<div class="col-md-12 text-center">
<ul class="pagination-custom text-center list-inline">
<li class="pag-link list-inline-item"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
<li class="pag-link list-inline-item"><a href="#">1</a></li>
<li class="pag-link list-inline-item"><a href="#">2</a></li>
<li class="pag-link current list-inline-item"><span>3</span></li>
<li class="pag-link list-inline-item"><a href="#">4</a></li>
<li class="pag-link list-inline-item"><a href="#">5</a></li>
<li class="pag-link list-inline-item"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
</ul>
</div>
</div>

</div>
</div>
</div>
</section>

@include('frontend.include.footer')


