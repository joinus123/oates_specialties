<footer>
         <div class="footer-wrapper mt-4">
            <div class="container">
               <div class="row">
               <div class="footer-content-detail">
                  <div class="row">
                     <div class="col-md-3 col1" data-aos="flip-left" data-aos-duration="1500">
                        <div class="list-content">
                        <div class="list-heading mb-4 ">
                           <h5>gift certificate</h5>
                        </div>
                        <ul>
                           <li><a href="Gift-Certificate-faq1.php">How to Send a Gift Certificate</a>
                           </li>
                           <li><a href="Gift-Certificate-faq2.php">How to Activate & Redeem</a></li>
                           <li><a href="Gift-Certificate-faq3.php">Gift Certificates & Store Credits</a></li>
                        </ul>
                     </div>
                  </div>
                     <div class="col-md-3 col2" data-aos="flip-left" data-aos-duration="1500">
                          <div class="list-content">
                        <div class="list-heading mb-4">
                           <h5>product information</h5>
                        </div>
                        <ul>
                           <li><a href="About-resistance-tubing.php">about resistance tubing</a>
                           </li>
                           <li><a href="shoulder-tubing.php">shoulder tube product information</a></li>
                           <li><a href="warnings-and-maintenance-procedures.php">warning, cautions, and maintenance procedures</a></li>
                        </ul>
                     </div>
                  </div>
                     <div class="col-md-2 col3" data-aos="flip-left" data-aos-duration="1500">
                          <div class="list-content">
                        <div class="list-heading mb-4">
                           <h5>affiliate program</h5>
                        </div>
                        <ul>
                           <li><a href="affiliate-home.php">affiliate information</a>
                           </li>
                           <li><a href="affiliate-faq.php">affiliate program FAQ</a></li>
                           <li><a href="affiliate-login-program.php">affiliate login</a></li>
                        </ul>
                     </div>
                  </div>
                     <div class="col-md-2 col4" data-aos="flip-left" data-aos-duration="1500">
                          <div class="list-content">
                        <div class="list-heading mb-4">
                           <h5>website policies</h5>
                        </div>
                        <ul>
                           <li><a href="product-warranty-and-limitations.php">product warranty and limitations</a>
                           </li>
                           <li><a href="terms-of-use.php">teams of use</a></li>
                           <li><a href="privacy-policy-cookie-restriction-mode.php">privacy policy</a></li>
                        </ul>
                     </div>
                  </div>
                     <div class="col-md-2 col5" data-aos="flip-left" data-aos-duration="1500">
                          <div class="list-content">
                        <div class="list-heading mb-4">
                           <h5>contact</h5>
                        </div>
                        <ul>
                           <li><a href="contactus.php"><i class="fa fa-map-marker pr-2" aria-hidden="true"></i>contact us</a></li>
                           <li><a href="mailto:gunnar@oatesspecialties.com"><i class="fa fa-envelope pr-2" aria-hidden="true"></i>email us</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
            <div class="row">
               <div class="col-md-12">
               <div class="footer-bottom mt-4">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="footer-bottom-sec1">
                           <img src="{{asset('storage/media/'.$Sitesettings[0]->footer_logo)}}">
                        </div>
                     </div>
                     {{-- @dd($Sitesettings)l; --}}
                     <div class="col-md-6">
                        <div class="footer-bottom-sec2 text-right">
                           <div class="social-link">
                            <ul class="list-inline">
                              @foreach($socialmedialinks as $links)
                                 <li class="list-inline-item"><a href="#"><img src="{{asset('storage/media/'.$links->socialmedia_image)}}"></a></li>
                                 @endforeach
                               </ul>
                             
                           </div>
                           <div class="copy-right">
                              <p>{{$Sitesettings[0]->copy_righttext}}</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end-footer -->
      <script src="{{asset('assets/js/jquery.min.js')}}"></script>
      <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
      <script src="{{asset('assets/js/aos.min.js')}}"></script>
      <script src="{{asset('assets/js/custom.js')}}"></script>
      <script>
         AOS.init();
      </script>
   </body>
</html>