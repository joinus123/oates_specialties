@include('frontend.include.header')

<section class="blog-page">
    <div class="blog-page-wrapper">
       <div class="banner">
          <div class="col-md-12">
             <div class="sub-page-heading">
                <div class="container">
                   <h2>Blog</h2>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="blog-main-sec">
    <div class="container-fluid">
       <div class="row">
 <!--          <div class="col-md-6">
             <div class="blog">
                <div class="title">
                   <h5 class="mb-2">Lorem ipsum</h5>
                   <h3 class="mb-0">
                      Lorem ipsum
                   </h3>
                   <p> dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                   </p>
                </div>
             </div>
          </div> -->
 <!--                   <div class="col-md-6">
             <div class="blog-img">
                <img src="assets/images/allproduct-6.png" class="fluid" alt="img">
             </div>
          </div> -->
      
          <div class="blog spacing">
                   <div class="row h-100 align-content-center align-items-center">
                      @foreach($blogs as $blog)
                         
                     
                      <div class="col-lg-6">
                   
                   <h3 class="mb-0">
                     {{$blog->heading}}
                   </h3>
                         <div class="pera">
                            <p> {!!$blog->description!!}</p>
                            
                         </div>
                      </div>
                      <div class="col-lg-6">
                         <div class="blog-sub-img">
                         <img src=" {{asset('storage/media/'.$blog->image)}}" class="img-fluid" alt="image">
                      </div>
                      </div>
                      @endforeach
                   </div>
                </div>
 
       </div>
    </div>
    </div>
 </section>
@include('frontend.include.footer')
