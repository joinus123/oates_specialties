@include('frontend.include.header')

<div class="banner mt-4">
                        <div class="col-md-12">
                        <div class="sub-page-heading">
                           <div class="container">
                           <h2>dash board</h2>
                           </div>
                        </div>
                     </div>
                     </div>
      <section class="dashboard spacing">
         <div class="container">
            <div class="row">
               <div class="col-md-4 mb-3">
                  <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">dashboard</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">account details</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">order detail</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="logout-tab" data-toggle="tab" href="#logout" role="tab" aria-controls="contact" aria-selected="false">log out</a>
                     </li>
                  </ul>
               </div>
               <!-- /.col-md-4 -->
               <div class="col-md-8">
                  <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h2 class="text-left dashBoardH4">My Dashboard</h2>
                        <hr>
                        <div class="row">
                           <div class="col-lg-6 col-md-12">
                              <div class="box">
                                 <div class="box-title d-flex justify-content-between">
                                    <h4>Account Details</h4>
                                    <div class="edit">
                                    <a href="#">Edit <i class="fa fa-edit"></i></a>
                                    </div>
                                 </div>
                                 <div class="box-content">
                                    <div class="pera">
                                    <p>Daniel Adams</p>
                                    </div>
                                    <p>   
                                    <p>daniel.adams@gmail.com</p>
                                    </p>
                                    <a class="pass-link" href="#">Change Password</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-12">
                              <div class="box">
                                 <div class="box-title d-flex justify-content-between">
                                    <h4>Order History</h4>
                                    <div class="edit">
                                    <a href="#" class="pull-right">View <i class="fa fa-edit"></i></a>
                                 </div>
                                 </div>
                                 <div class="box-content">
                                    <div class="pera">
                                    <p>Total Number of Orders : <span class="font-weight-700">5</span></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-12">
                              <div class="box">
                                 <div class="box-title d-flex">
                                    <h4>Select Your Latest Plans</h4>
                                 </div>
                                 <div class="box-content">
                                    <div class="pera">
                                    <p>Lorem Ipsum De amit Lorem Ipsum</p>
                                    </div>
                                    <div class="pera">
                                    <p>Lorem Ipsum De amit Lorem Ipsum </p>
                                    </div>
                                    <a class="pass-link" href="#">Click here for latest plans</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-12">
                              <div class="box">
                                 <div class="box-title d-flex">
                                    <h4>Log out</h4>
                                 </div>
                                 <div class="box-content">
                                    <div class="pera">
                                    <p>Logout from your account to stay secure</p>
                                    </div>
                                    <div class="pera">
                                    <p>Log Out Now</p>
                                    </div>
                                    <a class="pass-link" href="#">Log out</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h2 class="text-left dashBoardH4">My Account Details</h2>
                        <hr>
                        <div class="mainForm">
                           <form>
                              <div class="row">
                                 <div class="col-lg-6 col-md-12 col-12 col-sm-6 dashboardform">
                                    <div class="col-12 col-sm-12">
                                       <h4>Account Information</h4>
                                    </div>
                                    <div class="account-detail-col2 mt-4  mb-4">
                                    <div class="col-12 col-sm-12">
                                          <div class="form-group">
                                            <label for="firstname">Name:</label>
                                            <input type="text" class="form-control" id="firstname" placeholder="Enter Your First Name">
                                          </div>
                                    </div>
                                    <div class="col-12 col-sm-12">
                                       <div class="form-group">
                                       <label for="lastname">Last Name:</label>
                                       <input type="text"  class="form-control" id="lastname" placeholder="Enter Your Last Name">
                                    </div>
                                    </div>
                                    <div class="col-12 col-sm-12">
                                       <div class="form-group">
                                       <label for="email">Email:</label>
                                       <input type="email" class="form-control" id="email" placeholder="Enter Your Email">
                                    </div>
                                    </div>
                                 </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                                       <a href="#" class="custom-btn">Update Details</a>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-12 col-xs-12 col-sm-6">
                                    <div class="col-xs-12 col-sm-12">
                                       <h4>Set New Password:</h4>
                                    </div>
                                    <div class="account-detail-col2 mt-4  mb-4">
                                    <div class="col-xs-12 col-sm-12">
                                       <div class="form-group">
                                       <label for="currentpswrd">Current Password:</label>
                                       <input type="password" class="form-control" id="currentpswrd" placeholder="Enter Your Current Password">
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12">
                                       <div class="form-group">
                                       <label for="newpswrd">New Password:</label>
                                       <input type="password" class="form-control" id="newpswrd" placeholder="Enter Your New Password">
                                    </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12">
                                       <div class="form-group">
                                       <label for="confirmpswrd">Confirm Password:</label>
                                       <input type="password" class="form-control" id="confirmpswrd" placeholder="Confirm Your New Password">
                                    </div>
                                    </div>
                                 </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                                       <a href="#" class="custom-btn">Update Password</a>
                                    </div>
                                 </div>
                              </div>
                           </form>
                           <form>
                           </form>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <h2 class="text-left dashBoardH4">Order History</h2>
                        <hr>
                        <table class="table customtable  ">
                           <thead>
                              <tr>
                                 <th>Lorem</th>
                                 <th>Lorem</th>
                                 <th>Lorem</th>
                                 <th>Lorem</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>Data 1</td>
                                 <td>Data 2</td>
                                 <td>Data 3</td>
                                 <td>Data 4</td>
                              </tr>
                              <tr>
                                 <td>Data 1</td>
                                 <td>Data 2</td>
                                 <td>Data 3</td>
                                 <td>Data 4</td>
                              </tr>
                              <tr>
                                 <td>Data 1</td>
                                 <td>Data 2</td>
                                 <td>Data 3</td>
                                 <td>Data 4</td>
                              </tr>
                              <tr>
                                 <td>Data 1</td>
                                 <td>Data 2</td>
                                 <td>Data 3</td>
                                 <td>Data 4</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <!-- /.col-md-8 -->
            </div>
         </div>
      </section>

@include('frontend.include.footer')




