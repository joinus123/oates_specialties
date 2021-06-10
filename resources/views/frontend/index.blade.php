@include('frontend.include.header');
;
{{-- @dd($new_store_products);  --}}
{{-- @dd($best_sellers); --}}
<section class="img-slider">
   <div class="img-slider-wrapper mt-4">
      <div class="">
         <div class="row">
            <div class="col-md-6 m_0 p_0">
               <div class="img-sec" data-aos="fade-right" data-aos-duration="1500">
                  <img src="{{asset('storage/media/'.$bannerslider[0]->image)}}" class="img-fluid">
               </div>
            </div>
            <div class="col-md-6 m_0 p_0">
               <div class="content-slider-wrapper" data-aos="fade-left" data-aos-duration="1500">
                  <div class="owl-carousel height" id="slider1">
                     @foreach ($bannerslider as $view)
                       <div class="item">
                        <div class="content-slider text-center">
                           <div class="first-pera">
                              <p>{{$view->heading_one}}</p>
                           </div>
                           <div class="second-pera">
                              <p>{{$view->heading_two}}</p>
                           </div>
                           <div class="last-pera">
                              <p>{{$view->heading_three}}</p>
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end-img-slider-sec -->
<!-- brands -->
<section class="brands">
  
      
 
   <div class="brands-wrapper" data-aos="fade-up" data-aos-duration="1500">
   <div class="container">
      <div class="row h-100 align-items-center align-content-center">
        
         <div class="col-md-4">
            <div class="brand-heading">
               <h1>our <span>brand</span></h1>
            </div>
         </div>
         <div class="col-md-8">
           
            <div class="brand-slider-sec">
              
               <div class="owl-carousel brand-slider">
                  @foreach($brandlogos as $brandlogo)
                  <div class="item"><img src="{{asset('storage/media/'. $brandlogo['brand_logo'])}}"></div>
                
                  @endforeach
               </div>
            </div>
      </div>
    </div>
   </div>
   </div>
</section>


<!-- end-brands -->
<!-- new-store -->
<section class="new-store">
   <div class="new-store-wrapper spacing responsive-btn">
      <div class="container">
         <div class="row"  data-aos="fade-right" data-aos-duration="1500">
              <div class="col-md-8">
               <div class="heading store-heading">
                  <h2>new in <span>store</span></h2>
               </div>
               <div class=" store-slider owl-carousel owl-theme">
                @foreach($new_store_products as $new_store_product)
                <div class="item">
                <div class="store-item">
              
               <div class="store-img">
                  <img src="{{asset('storage/media/'.$new_store_product['image'])}}">
                </div>
                        <div class="store-content m-3">
                           <h5>{{$new_store_product['name']}}</h5>
                           <p>{{$new_store_product['product_description']}}</p>
                           <div class="price-btn d-flex">
                           <a href="cart.php" class="custom-btn">add to cart </a>
                           <span>${{$new_store_product['price']}}</span>
                           </div>
                        </div>
                      
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
            <div class="col-md-4">
               <div class="store-video-sec">
                  <div class="video-bg">
                     <img src="assets/images/store-play-img.jpg" class="img-fluid" alt="video">
                  </div>
                  <div class="play-img">
                     <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
                     <img src="assets/images/play-btn.png" class="img-fluid" alt="play"></a>
                  </div>
               </div>
            </div>
            
         </div>
      </div>
   </div>
</section>
<!-- seller-section -->
<section class="seller">
   <div class="seller-wrapper spacing overlay-img responsive-btn">
      <div class="container">
         <div class="row" data-aos="fade-left" data-aos-duration="1500">
            <div class="col-md-12">
               <div class="heading sell-heading">
                  <h2>best seller</h2>
               </div>
           
               <div class=" seller-slider owl-carousel owl-theme">
                  @foreach($best_sellers as $best_seller)
                  <div class="item">
                     <div class="sell-item">
                        <div class="sell-img">
                           <img src="{{asset('storage/media/'.$best_seller['image'])}}">
                        </div>
                        <div class="sell-content p-3">
                           <h5>{{$best_seller['name']}}</h5>
                           <p>{{$best_seller['product_description']}}</p>
                           <a href="cart.php" class="custom-btn cl-white border-black">add to cart </a>
                           <span>${{$best_seller['price']}}</span>
                        </div>
                     </div>
                  </div>
                  @endforeach
                </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- product-sction -->
<section class="product">
   <div class="product-wrapper spacing">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="heading product-heading">
                  <h2>Featured <span>Product</span></h2>
               </div>
                <div class=" product-slider owl-carousel owl-theme"> 
                  @foreach($featured_products as $featured_product)
                  <div class="item">
                     <div class="product-item">
                        <div class="product-img">
                           <img src="{{asset('storage/media/'.$featured_product['image'])}}">
                        </div>
                        <div class="product-content m-3">
                           <h5>{{$featured_product['name']}}</h5>
                           <p>{{$featured_product['product_description']}}</p>
                           <a href="cart.php" class="custom-btn">add to cart </a>
                           <span>${{$featured_product['price']}}</span>
                        </div>
                     </div>
                     </div>
                  @endforeach
                </div> 
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- aboutus-sec -->
<section class="aboutus">
   <!--<div class="aboutus-wrapper text-center spacing">-->
   <!--   <div class="container">-->
   <!--      <div class="row"  data-aos="flip-up" data-aos-duration="1200">-->
   <!--         <div class="col-md-12">-->
   <!--            <div class="heading aboutus-heading">-->
   <!--               <h2>what others say about us</h2>-->
   <!--            </div>-->
   <!--            <div class="aboutus-pera m-4">-->
   <!--               <p>Outstanding Stuff! I wanted to thank you for the outstanding customer service and products you have provided the Fastball USA Baseball Academy. Your company is hands down the best place to get equipment for training high level athletes. </p>-->
   <!--            </div>-->
   <!--            <div class=" aboutus-slider owl-carousel owl-theme">-->
   <!--               <div class="item">-->
   <!--                  <div class="product-item">-->
   <!--                     <div class="product-img">-->
   <!--                        <img src="assets/images/aboutus-img1.png">-->
   <!--                     </div>-->
   <!--                  </div>-->
   <!--               </div>-->
   <!--               <div class="item">-->
   <!--                  <div class="product-item">-->
   <!--                     <div class="product-img">-->
   <!--                        <img src="assets/images/aboutus-img3.png">-->
   <!--                     </div>-->
   <!--                  </div>-->
   <!--               </div>-->
   <!--               <div class="item">-->
   <!--                  <div class="product-item">-->
   <!--                     <div class="product-img">-->
   <!--                        <img src="assets/images/aboutus-img3.png">-->
   <!--                     </div>-->
   <!--                  </div>-->
   <!--               </div>-->
   <!--               <div class="item">-->
   <!--                  <div class="product-item">-->
   <!--                     <div class="product-img">-->
   <!--                        <img src="assets/images/aboutus-img1.png">-->
   <!--                     </div>-->
   <!--                  </div>-->
   <!--               </div>-->
   <!--            </div>-->
   <!--         </div>-->
   <!--      </div>-->
   <!--   </div>-->
   <!--</div>-->
   <section class="testimonials">
<div class="container">

<div class="row">
  <div class="col-sm-12">
    <div id="customers-testimonials" class="owl-carousel">

      <!--TESTIMONIAL 1 -->
     
      <!--END OF TESTIMONIAL 1 -->
      <!--TESTIMONIAL 2 -->
     
      <!--END OF TESTIMONIAL 2 -->
      <!--TESTIMONIAL 3 -->
     
      <!--END OF TESTIMONIAL 3 -->
      <!--TESTIMONIAL 4 -->

     
  
   @foreach($sliderimages as $view)
  
   <div class="item">
      <div class="shadow-effect">
          <img class="img-circle"src="{{asset('storage/media/'.$view['slider_image'])}}">
          <p>{!!$view['slider_description']!!}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
      <!--END OF TESTIMONIAL 4 -->
      <!--TESTIMONIAL 5 -->
    
      <!--END OF TESTIMONIAL 5 -->
    </div>
  </div>
</div>
</div>
</section>
</section>
<!-- end-abooutus-sec -->
<!-- blog-section -->
<section class="blog">
   <div class="blog-wrapper text-center spacing">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="heading blog-heading mb-3">
                  <h2>our <span>blogs</span></h2>
               </div>
            </div>
            @foreach($ourblogs   as $ourblog)
            <div class="col-md-6">
             
              <div class="blog-sec p-4" data-aos="fade-up" data-aos-duration="1500">
                  <div class="blog-img">
                     <img src="{{asset('storage/media/'.$ourblog->image)}}" class="img-fluid" alt="blog1">
                  </div>
                  <div class="blog-pera mt-2">
                     <p>{{$ourblog->heading}}</p>
                  </div>
                  <div class="blog-sub-pera p-4">
                     <p> {!!$ourblog->description!!}</p>
                  </div>
                  <a href="{{route('blog.page')}}" class="custom-btn">read more</a>
               </div>
          </div>
            @endforeach
          
         </div>
      </div>
   </div>
</section>
<!-- end-blog-section -->
<!-- OATES SPECIALTIES LLC-sec -->
<section class="llc-testimonial">
   <div class="llc-testimonial-wrapper spacing" data-aos="zoom-in-up" data-aos-duration="1500">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <div class="testimonial-heading mb-3">
                  <h2>OATES <span>SPECIALTIES LLC</span></h2>
               </div>
               <div class="owl-carousel testimonial-slider">
                  <div class="item">
                     <div class="pera">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                     </div>
                     <div class=".aboutus-slider owl-carousel">
                      
                           
                      
                        <div class="item"><img src="assets/images/brand-img-1.png"></div>
                        <div class="item"><img src="assets/images/brand-img-2.png"></div>
                        <div class="item"><img src="assets/images/brand-img-3.png"></div>
                        <div class="item"><img src="assets/images/brand-img-1.png"></div>
                        <div class="item"><img src="assets/images/brand-img-2.png"></div>
                        <div class="item"><img src="assets/images/brand-img-3.png"></div>
                      
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@include('frontend.include.footer')


