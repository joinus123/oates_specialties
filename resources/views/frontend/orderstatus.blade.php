@include('frontend.include.header')
<section class="login">
    <div class="login-wrapper li-spacing inner-page">
                            <div class="banner">
                    
                   <div class="col-md-12">
                   <div class="sub-page-heading">
                      <div class="container">
                      <h2> LOGIN OR CREATE AN ACCOUNT</h2>
                   </div>
                   </div>
                </div>
             
                </div>
    <div class="container">
    <div class="row mb-5">
<!--             <div class="heading">
          LOGIN OR CREATE AN ACCOUNT
       </div> -->
         <div class="col-md-6">
          <div class="login-content">
       <div class="sub-heading mb-3 mt-3">
          NEW CUSTOMERS
          </div>
          <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
          <div class="col-md-12 text-right mt-5">
                   <a href="#" class="custom-btn" type="submit">Create an account</a>
                </div>
       </div>
    </div>
       <div class="col-md-6">
          <div class="sub-heading mb-3 mt-3">
          REGISTERED CUSTOMERS
          </div>
          <p>If you have an account with us, please log in.</p>
          <form action="">
             <div class="row">
                <div class="col-md-12">
                   <div class="form-group">
                      <input type="text" class="form-control mt-2" placeholder="Email" required>
                   </div>
                </div>
                <div class="col-md-12">
                   <div class="form-group">
                      <input type="password" class="form-control mt-2" placeholder="Password" required>
                   </div>
                </div>
                <div class="col-md-12">
                   <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                <label class="form-check-label" for="invalidCheck2">
                                  Remember Me
                                </label>
                              </div>
                            </div>
                            </div>
                <div class="col-md-6 text-right">
                   <a href="#" class="custom-btn" type="submit">submit</a>
                </div>
                </div>
                </div>
             </div>
          </form>
       </div>

    </div>
 </section>
 <!-- end-contactus-section -->

@include('frontend.include.footer')

