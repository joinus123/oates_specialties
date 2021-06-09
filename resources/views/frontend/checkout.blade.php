@include('frontend.include.header')
<div class="banner mt-4">
    <div class="col-md-12">
    <div class="sub-page-heading">
       <div class="container">
       <h2>Check out</h2>
       </div>
    </div>
 </div>
 </div>
<section class="checkout">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-sm-12 col-md-12 text-center p-0 mt-3 mb-2">
<div class="card px-0 pt-4 pb-0 mt-3 mb-3">

   <form method="POST" id="msform" action="{{ route('stripe.payment') }}">
      @csrf
<!-- progressbar -->
<ul id="progressbar">
    <li class="active" id="account"><span class="round-tab">
             <img src="assets/images/user-2.png">
         <!--<i class="fa fa-user"></i>-->
         </span></li>
    <li id="personal"><span class="round-tab">
             <img src="assets/images/receipt-2.png">
         <!--<i class="fa fa-user"></i>-->
         </span></li>
    <li id="payment"><span class="round-tab">
             <img src="assets/images/review-2.png">
         <!--<i class="fa fa-user"></i>-->
         </span></li>
    <li id="confirm"><span class="round-tab">
             <img src="assets/images/debit-card-2.png">
         <!--<i class="fa fa-user"></i>-->
         </span></li>
</ul>
<div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
</div> <br> <!-- fieldsets -->

<fieldset>
    <div class="form-card">
        <div class="row">
         @guest
            <div class="col-md-6" style="border-right: 3px dashed #940026;">
                <h4>Account Information:</h4>
              
               
                <div class="form-group row">
                  <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                  <div class="col-md-8">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              <div class="form-group row">
               <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Password') }}</label>

               <div class="col-md-8">
                   <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                   @error('password')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
               </div>
           </div>

         
           <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

               
            </div>
        </div>
                  

            </div>
            @endguest
            @guest
             <div class="col-md-6">
                <h4>Checkout As A Guest User :</h4>
                <div class="mt-4">
                <a href="#" class="checkout-btn">guest user</a>
                </div>
            </div>
            @endguest
        </div> 
<!--                             <label class="fieldlabels">Email: *</label> <input type="email" name="email" placeholder="Email Id" /> <label class="fieldlabels">Username: *</label> <input type="text" name="uname" placeholder="UserName" /> <label class="fieldlabels">Password: *</label> <input type="password" name="pwd" placeholder="Password" /> <label class="fieldlabels">Confirm Password: *</label> <input type="password" name="cpwd" placeholder="Confirm Password" /> -->
    </div> 
   
    <input type="button" name="next" class="next action-button"  value="NEXT" />
    <!-- <a href="#" class="next checkout-btn float-right">save and continue</a> -->

</fieldset>
<fieldset>
    <div class="form-card">
        <div class="row">
          <div class="row">
    <div class="col-md-12">
       <h4>Billing Information</h4>
    </div>
    <div class="col-md-6">
       <div class="row">
          <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control checkout-form-1" placeholder="First Name" value="" name="full_name" data-validation="required name" required="">
             </div>
          </div>
          <div class="col-md-6">
             <div class="form-group">
                <input type="text" class="form-control checkout-form-1" placeholder="Last Name" name="last_name" data-validation="required name" required="">
             </div>
          </div>
       </div>
    </div>
    <div class="col-md-6">
       <div class="form-group">
          <input type="text" name="address" class="form-control checkout-form-1" placeholder="Street Address" data-validation="required" required="">
       </div>
    </div>
    <div class="col-md-6">
       <div class="form-group">
          <input type="email" class="form-control checkout-form-1" placeholder="email_address"   name="email" data-validation="required email" required="">
       </div>
    </div>
  
    <div class="col-md-6">
       <div class="row">
          <div class="col-md-6">
             <div class="form-group">
                <input type="text" name="city" class="form-control checkout-form-1" placeholder="Town / City" data-validation="required" required="">
             </div>
          </div>
          <div class="col-md-6">
             <div class="form-group">
                <input type="text" class="form-control checkout-form-1" placeholder="ZIP Code" name="zipcode" data-validation="required number" required="">
             </div>
          </div>
       </div>
    </div>
    <div class="col-md-6">
       <div class="form-group">
          <input type="number" class="form-control checkout-form-1" placeholder="Phone" name="phone" data-validation="required number" required="">
       </div>
    </div>
    <div class="col-md-6">
       <div class="form-group">
          <select id="billing_state" name="select_state" class="form-control checkout-form-1" placeholder="State" data-validation="required" required="">
             <option value="">Select States</option>
             <option value="AL">Alabama</option>
             <option value="AK">Alaska</option>
             <option value="AS">American Samoa</option>
             <option value="AZ">Arizona</option>
             <option value="AR">Arkansas</option>
             <option value="CA">California</option>
             <option value="CO">Colorado</option>
             <option value="CT">Connecticut</option>
             <option value="DE">Delaware</option>
             <option value="DC">District Of</option>
             <option value="FM">Federated States</option>
             <option value="FL">Florida</option>
             <option value="GA">Georgia</option>
             <option value="GU">Guam</option>
             <option value="HI">Hawaii</option>
             <option value="ID">Idaho</option>
             <option value="IL">Illinois</option>
             <option value="IN">Indiana</option>
             <option value="IA">Iowa</option>
             <option value="KS">Kansas</option>
             <option value="KY">Kentucky</option>
             <option value="LA">Louisiana</option>
             <option value="ME">Maine</option>
             <option value="MH">Marshall Islands</option>
             <option value="MD">Maryland</option>
             <option value="MA">Massachusetts</option>
             <option value="MI">Michigan</option>
             <option value="MN">Minnesota</option>
             <option value="MS">Mississippi</option>
             <option value="MO">Missouri</option>
             <option value="MT">Montana</option>
             <option value="NE">Nebraska</option>
             <option value="NV">Nevada</option>
             <option value="NH">New Hampshire</option>
             <option value="NJ">New Jersey</option>
             <option value="NM">New Mexico</option>
             <option value="NY">New York</option>
             <option value="NC">North Carolina</option>
             <option value="ND">North Dakota</option>
             <option value="MP">Northern Mariana</option>
             <option value="OH">Ohio</option>
             <option value="OK">Oklahoma</option>
             <option value="OR">Oregon</option>
             <option value="PW">Palau</option>
             <option value="PA">Pennsylvania</option>
             <option value="PR">Puerto Rico</option>
             <option value="RI">Rhode Island</option>
             <option value="SC">South Carolina</option>
             <option value="SD">South Dakota</option>
             <option value="TN">Tennessee</option>
             <option value="TX">Texas</option>
             <option value="UT">Utah</option>
             <option value="VT">Vermont</option>
             <option value="VI">Virgin Islands</option>
             <option value="VA">Virginia</option>
             <option value="WA">Washington</option>
             <option value="WV">West Virginia</option>
             <option value="WI">Wisconsin</option>
             <option value="WY">Wyoming</option>
          </select>
       </div>
    </div>
    <div class="col-md-6">
       <div class="form-group">
          <input type="text" class="form-control checkout-form-1" name="additional_brief" placeholder="Additional Brief" data-validation="required" required="">
       </div>
    </div>
    <div class="col-md-6">
       <div class="form-group">
          <select id="billing_country" name="select_country" class="form-control checkout-form-1" placeholder="Country" data-validation="required">
             <option value="USA">United States</option>
          </select>
       </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
         <input type="text" class="form-control checkout-form-1" id="shipping_address" name="shipping_address" placeholder="Shipping Address" data-validation="required" required="">
      </div>
   </div>
   <div class="col-md-6">
      <div class="form-group">
         <input type="text" class="form-control checkout-form-1" id="billing_address_address" name="billing_address" placeholder="Billing Address" data-validation="required" required="">
      </div>
   </div>
    
 </div>
        </div><!--  <label class="fieldlabels">First Name: *</label> <input type="text" name="fname" placeholder="First Name" /> <label class="fieldlabels">Last Name: *</label> <input type="text" name="lname" placeholder="Last Name" /> <label class="fieldlabels">Contact No.: *</label> <input type="text" name="phno" placeholder="Contact No." /> <label class="fieldlabels">Alternate Contact No.: *</label> <input type="text" name="phno_2" placeholder="Alternate Contact No." /> -->
    </div> 

    <input type="button" name="next" class="next action-button" value="Next" />
     <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
<!--                                                   <div class="nxt-pre-btn-sec">  
         <a href="#" class="previous checkout-btn mr-2">Previous</a>
         <a href="#" class="next checkout-btn">save and continue</a>
     </div> -->
</fieldset>
<fieldset>
    <div class="form-card">

                                   <div class="row">
          <div class="col-md-6">
             <div class="billing-address">
                <h4>Billing Address</h4>
                <hr>
                <p id="name">Rakesh Vaidya</p>
                <p id="address">54 W 47th ST</p>
                <p id="city">STE 5FW</p>
                <p id="state">NEW YORK NY 10036-8714</p>
                <p id="Country">USA</p>
             </div>
          </div>
          <div class="col-md-6">
             <div class="billing-address">
                <h4>Shipping Address</h4>
                <hr>
                <p id="shippingName">Rakesh Vaidya</p>
                <p id="shippingAddress">54 W 47th ST</p>
                <p id="shippingCity">STE 5FW</p>
                <p id="shippingState">NEW YORK NY 10036-8714</p>
                <p id="shippingCountry">USA</p>
             </div>
          </div>
          <div class="col-md-6">
             <div class="order-information">
                <h4>Order Information</h4>
                <hr>
                <div class="order-box">
                   <p>Number Of Items</p>
                   <span>1</span>
                </div>
                <div class="order-box">
                   <p>Item Total</p>
                   <span>$ 11,980.00</span>
                </div>
                <div class="order-box">
                   <p>Shipping</p>
                   <span>Free Shipping</span>
                </div>
                <div class="total-box">
                   <h6>Total</h6>
                   <span>$ 11,980.00</span>
                </div>
             </div>
          </div>
       </div>
    </div>
                 <input type="button" name="next" class="next action-button" value="Next" />
     <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
</fieldset>


<fieldset>
    <div class="form-card">
     <div class="row">
    <div class="col-md-6 offset-md-3">
       <div class="credit-card-box">
          <div class="col-md-12">
             <h4 class="cl-white">Payment Information</h4>
          </div>
          <div class="row">
             <div class="col-md-12">
                <div class="form-group">
                   <label>Card Number:</label>
                   <input type="text" value="4242424242424242"class="form-control checkout-form-1" minlength="16" maxlength="16" placeholder="Card Number" name="ccnumber" data-validation="required number" data-validation-length="min16" required="">
                </div>
             </div>
             <div class="col-md-6">
                <label>Card Expiration Date:</label>
                <div class="row">
                   <div class="col-md-6">
                      <div class="form-group">
                         <!--<label>Card Number:</label>-->
                         <select class="form-control checkout-form-1" id="sel1" name="ccmonth">
                            <option value="" selected="" name="">Month</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                           
                           
                         </select>
                         <!--<input type="text" class="form-control checkout-form-1" minlength="16" maxlength="16" placeholder="Card Number" name="orders_card_num" data-validation="required number" data-validation-length="min16"  required>-->
                      </div>
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
                         <!--<label>Card Number:</label>-->
                         <select class="form-control checkout-form-1" id="selectYear" name="ccyear">
                            <option value="" selected="" >Year</option>
                         <option value="2021">2021</option></select>
                         <!--<input type="text" class="form-control checkout-form-1" minlength="16" maxlength="16" placeholder="Card Number" name="orders_card_num" data-validation="required number" data-validation-length="min16"  required>-->
                      </div>
                   </div>
                </div>
                <!--<div class="form-group">-->
                <!--   <label>Card Expiration Date:</label>-->
                <!--   <input type="date" class="form-control checkout-form-1" placeholder="Expiry Date" name="orders_exp_date" data-validation="required date" required>-->
                <!--</div>-->
             </div>
             <div class="col-md-6">
                <div class="form-group">
                   <label>CVV:</label>
                   <input type="number" class="form-control checkout-form-1" placeholder="Card Code" name="cvc" data-validation="required number" required="">
                </div>
             </div>
             <div class="col-md-12">
                <p><img src="http://myprojectstaging.com/custom/real_rear_dev/assets/front/images/padlock.png" style="max-width: 17px;">Your payment is securly processed</p>
             </div>
          </div>
       </div>
    </div>
 </div>
    </div>
    <div class="row">
    <div class="col-md-12 text-right">
     
       <button type="submit" class="action-button">Submit</button>
      
    </div>
 </div>
</fieldset>
</form>
</div>
</div>
</div>
</div>
</section>
<script type="text/javascript">
   $(function() {
       var $form         = $(".validation");
     $('form.validation').bind('submit', function(e) {
       var $form         = $(".validation"),
           inputVal = ['input[type=email]', 'input[type=password]',
                            'input[type=text]', 'input[type=file]',
                            'textarea'].join(', '),
           $inputs       = $form.find('.required').find(inputVal),
           $errorStatus = $form.find('div.error'),
           valid         = true;
           $errorStatus.addClass('hide');
    
           $('.has-error').removeClass('has-error');
       $inputs.each(function(i, el) {
         var $input = $(el);
         if ($input.val() === '') {
           $input.parent().addClass('has-error');
           $errorStatus.removeClass('hide');
           e.preventDefault();
         }
       });
     
       if (!$form.data('cc-on-file')) {
         e.preventDefault();
         Stripe.setPublishableKey($form.data('stripe-publishable-key'));
         Stripe.createToken({
           number: $('.card-num').val(),
           cvc: $('.card-cvc').val(),
           exp_month: $('.card-expiry-month').val(),
           exp_year: $('.card-expiry-year').val()
         }, stripeHandleResponse);
       }
     
     });
     
     function stripeHandleResponse(status, response) {
           if (response.error) {
               $('.error')
                   .removeClass('hide')
                   .find('.alert')
                   .text(response.error.message);
           } else {
               var token = response['id'];
               $form.find('input[type=text]').empty();
               $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
               $form.get(0).submit();
           }
       }
     
   });
   </script>

@include('frontend.include.footer')


