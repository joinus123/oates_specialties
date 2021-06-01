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
          <img class="pic-1" src="{{asset('storage/media/'.$view->img)}}">
          <img class="pic-2" src="{{asset('storage/media/'.$view->img)}}">
          </a>
          <ul class="social">
             <!-- <li><a href="product-detail.html" data-tip="Quick View"><i class="fa fa-search"></i></a></li> -->
             <!-- <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li> -->
             <li><a href="cart.php" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
          </ul>
          <!-- <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a> -->
       </div>
       <div class="product-content">
          <h3 class="title"><a href="product-detail.php">{{$view->name}}</a></h3>
          <div class="price">{{$view->orignal_price}}-{{$view->discounted_price}}</div>
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


