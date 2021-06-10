<!DOCTYPE html>
<html lang="en">
   <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title></title>
      <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
      <link rel="icon" type="image/png" href="#">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/aos.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.theme.default.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
   </head>
   <body>
      <!-- top-header -->
      <section class="top-header" data-aos="fade-down" data-aos-duration="1500">
         <div class="top-header-wrapper">
            <div class="container">
               <div class="row">
                  <div class="col-md-2">
                     <div class="top-header-sec1">
                        <!--   <div class="top-header-content1"> -->
                        <a href="#">free shipping</a>
                        <img src="{{asset('assets/images/top-header-img-1.png')}}" class="img-fluid" alt="header-img">
                        <!-- </div> -->
                     </div>
                  </div>
                  <div class="col-md-10">
                     <div class="top-header-sec2 pull-right">
                        <ul class="list-inline">

                           <li class="list-inline-item">
                              @guest
                              <a href="{{route('login')}}"><img src="{{asset('assets/images/top-header-img-2.png')}}"> &nbsp; log in</a> / <a href="{{ route('register') }}">sign up</a>
                              @else
                              {{ Auth::user()->name }}
                              
                              <a class="login dropdown-item dropdown-menu-right" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                              @csrf
                          </form>
                              @endguest
                           </li>
                           <li class="list-inline-item"><a href="{{route('user-account')}}"><img src="{{asset('assets/images/top-header-img-3.png')}}"> &nbsp;my account</a></li>
                           <li class="list-inline-item"><a href="{{route('about.us')}}"><img src="{{asset('assets/images/top-header-img-4.png')}}"> &nbsp; about us</a></li>
                           <li class="list-inline-item"><a href="{{route('blog.page')}}"><img src="{{asset('assets/images/top-header-img-5.png')}}"> &nbsp; blog</a></li>
                           <li class="list-inline-item"><a href="{{route('video')}}"><img src="{{asset('assets/images/top-header-img-6.png')}}"> &nbsp; videos</a></li>
                          
                           <li class="list-inline-item"><a href="{{route('order-status')}}"><img src="{{asset('assets/images/top-header-img-8.png')}}"> &nbsp; order status</a></li>
                           <li class="list-inline-item"><i class="fa fa-heart heart" aria-hidden="true"></i><a href="{{route('cart.index')}}"> &nbsp; wishlist</a></li>
                        </ul> 
                     </div>
                     <div class="clearfix"></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end-top-header -->
      <!-- navigation -->
      <section class="navigation">
         <div class="navigation-wrapper">
            <div class="container-fluid">
               <!-- <div class="row"> -->
               <div class="col-md-12">
                  <div class="navigation-list text-center">
                     <ul class="list-inline">
                        
                        <li class="list-inline-item"><a href="{{route('all-product')}}" data-aos="zoom-in-up" data-aos-duration="1200">all products</a></li>
                        @foreach($Categorys as $Category)
 

                <li class="list-inline-item"><a href="{{route('productcategory',[$Category->id])}}" data-aos="zoom-in-up" data-aos-duration="1200">{{$Category->category_name}}</a></li>
                @endforeach
              
                        
                     </ul>
                  </div>
               </div>
               <!-- </div> -->
            </div>
         </div>
      </section>
      <!-- RESPONSIVE NAVIGATION -->
            <div class="mobile-menu">
         <div class="circle" id="navbar"><i class="fa fa-bars" aria-hidden="true"></i></div>
         <div class="nveMenu text-left">
            <div>
               <img src="{{asset('assets/images/logo.png')}}" class="img-fluid img-1">
            </div>
            <ul class="navlinks p-0 mt-4">
                        <li><a href="all-products.php">all products</a></li>
                        <li><a href="arm-health.php">arm care</a></li>
                        <li><a href="condition-recovery.html">condition & recover</a></li>
                        <li><a href="mobility-flexibility.html">mobility & flexibility</a></li>
                        <li><a href="strength-stability.html">strength & stability</a></li>
                        <li><a href="velocity-enhancement.html">velocity enhancement</a></li>
                        <li><a href="wake-up-warm-up.html">wake-up warm-up</a></li>
            </ul>
         </div>
         <div class="overlay"></div>
      </div>
      <!-- RESPONSIVE NAVIGATION -->
      <!-- end-navigation -->
      <!-- logo-search -->
      <section class="logo-search">
         <div class="logo-search-wrapper">
            <div class="container">
               <div class="row h-100 align-items-center align-content-center">
                  <div class="col-md-7 col-6">
                     <div class="logo-sec">
                        <a href="{{route('home-page')}}"><img src="{{asset('storage/media/'.$Sitesettings[0]->header_logo)}}" class="img-fluid img-1"></a>
                       <a href="{{route('home-page')}}"><img src="{{asset('storage/media/'.$Sitesettings[0]->header_logo)}}" class="img-fluid img-2"></a>
                     </div>
                  </div>
                  <div class="col-md-5 col-6">
                     <div class="search-sec">
                        <div class="search-box">
                           <input type="search" name="search" class="input-search col-12" placeholder="Search">
                           <i class="fa fa-search search-btn"></i>
                        </div>
                        <div class="shopping-card mt-2">
                           <a href="#" class=" custom-btn shopping">Shopping Cart - {{count(\Cart::getContent())}} item</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end-logo-search -->