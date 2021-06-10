@include('frontend.include.header')

<section class="aboutus-page">
         <div class="aboutus-page-wrapper">
                                        <div class="banner">
                          
                        <div class="col-md-12">
                        <div class="sub-page-heading">
                           <div class="container">
                           <h2>about us</h2>
                        </div>
                        </div>
                 
                     </div>
                     </div>
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="video-sec">
                        <div class="embed-responsive embed-responsive-21by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=Vaj9nLtNC0I&feature=emb_logo">
                                </iframe>
                              </div>

                              <div class="pera mt-4 text-center">
                              <p>We hope you find your visit here informative and productive.</p>
                             <p>Please take a moment to meet the people that make up Oates Specialties.</p>
                             </div>
                     </div>
                  </div>
               </div>
               <div class="oates-owner spacing">
                  <div class="row h-100 align-content-center align-items-center">
                     <div class="col-lg-6">
                        <img src="assets/images/team-img1.jpg" class="img-fluid" alt="image">
                        <div class="names text-center">
                           <h4> Robert and Gloria Oates</h4>
                           <p>Owners and Managers</p>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="pera">
                           <p>Robert brings with him a wealth of experience acquired from 33 years of working in school administration in capacities including department head, school principal, and assistant superintendent. In addition to a career in education, he was co-owner of a private security company from 1973--1990. Robert retired from school administration in 2003, and not being one satisfied to simply relax, he immediately founded Oates Specialties LLC. Robert enjoys talking to customers when they seek out his advice and when they have success stories to share after using Oates Specialties equipment.</p>
                           <p>Gloria retired in 2004 after a 29-year career and also devotes her time to the company. Like Robert, her many years of administrative experience as well as a business degree was a good fit in operating a small business.</p>
                           <p>In their spare time, Robert and Gloria enjoy traveling and spending time with family and friends.</p>
                           <p> Please feel free to call  us anytime we can help with your training needs.  We appreciate your business!</p>
                           <h6 class="text-right">Robert Oates</h6>
                        </div>
                     </div>
                  </div>
               </div>
                              <div class="oates-product-development spacing">
                  <div class="row h-100 align-content-center align-items-center">
                                          <div class="col-lg-6">
                        <div class="pera">
                           <p>Brian began participating in organized sports when he was four years old, with baseball, soccer, and basketball being his favorites. After high school, he chose to attend Trinity University in San Antonio due to the excellent reputation of their athletic programs combined with the university’s emphasis on academics.</p>
                           <p>Brian was a starting pitcher for TU from 2004--2008 where his career stats landed in school and conference record books in a total of 15 categories; he continues to hold the #2 position in the conference for career strikeouts per nine innings (11.2 in 227.1 innings). After graduation, he signed with the Seattle Mariners and spent two seasons in their organization.</p>
                           <p>Now a corporate attorney in Dallas, Brian continues to be the face of Oates Specialties and participates in product development and promotion in addition to contributing to the company’s blogs. Brian is active in softball and basketball leagues and enjoys playing golf.</p>
                           <p>Having first met when Brian played collegiate summer baseball in North Carolina, Brian married Diana Holoman in 2012. Diana graduated in 2011 from the University of North Carolina at Chapel Hill where she earned a degree in Journalism and Mass Communication. Diana is currently a multi-platform journalist and contributing editor with a daily digital magazine in Dallas. A die-hard Tar Heel through and through, Diana is everything social!</p>
                           <p>In January 2017, Brian and Diana were thrilled to welcome Brian "Harrison" Oates, Jr. to the family</p>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <img src="assets/images/team-img2.jpg" class="img-fluid" alt="image">
                        <div class="names text-center">
                           <h4>Brian, Diana and Harrison Oates</h4>
                           <p>Product Development and Promotion; Social Media</p>
                        </div>
                     </div>

                  </div>
               </div>
                                             <div class="oates-product-development spacing">
                  <div class="row h-100 align-content-center align-items-center">
                                          <div class="col-lg-6">
                        <img src="assets/images/team-img3.jpg" class="img-fluid" alt="image">
                        <div class="names text-center">
                           <h4>Gunnar Thompson</h4>
                           <p>General Manager</p>
                        </div>
                     </div>
                                          <div class="col-lg-6">
                        <div class="pera">
                           <p>Gunnar is a graduate of Sam Houston State University where he earned a Bachelor of Science degree in Kinesiology with a concentration in Clinical Exercise Science. Gunnar has had a keen interest in human anatomy and sports development for many years. He achieved his CSCS (Certified Strength and Conditioning Specialists) from the National Strength and Conditioning Association and obtained CPT (Certified Personal Trainer) and PES (Performance Enhancement Specialist) certification through the National Academy of Sports Medicine. In addition, he holds CPPS (Certified Physical Preparation Specialist) certification.</p>
                           <p>Gunnar has played baseball since he was 5 years old. He played on the Cayuga (Texas) Varsity team for 4 years and was the Texas High School Strikeout leader in Districts 1A-5A two years in a row. Named first team all-state pitcher in 2009 and 2010, as well as first team all-state DH in 2011 by the Texas Sports Writers Association, Gunnar played on a full scholarship at Northeast Texas Community College for 3 seasons, while being on medical redshirt status for one season.</p>
                           <p>In addition to being a regular blog contributor, Gunnar has much to offer customers based not only on his experience as an accomplished athlete, but his knowledge and personal use of the various products available through Oates Specialties. In his spare time, he enjoys hunting, fishing, playing with his dogs, and continued research into human anatomy and sports development.</p>
                           <p>For assistance with training needs, please feel free to reach out to Gunnar at Gunnar<span>@OatesSpecialties.com</span>, or telephone <span>936.295.4459</span></p>
                           
                        </div>
                     </div>


                  </div>
               </div>
               <div class="team-2">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="text-center spacing heading">
                           <h2><span>Meet The</span> Oates Specialties Team</h2>
                        </div>
                     </div>
                  </div>

    

            <div class="row spacing">
               @foreach($teams as $team)
             <div class="col-md-4">
               <div class="single-team">
                  <img src="{{asset('storage/media/'.$team->image)}}" alt="" class="img-fluid">
                  <div class="team-hover">
                     <h4>{{$team->name}}</h4>
                  </div>
               </div>
            </div>
             @endforeach
              </div>
           </div>

            </div>
         </div>
      </section>
      <!-- end-aboutus-section -->





      <!-- footer -->    

@include('frontend.include.footer')


