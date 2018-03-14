
   <!-- Sign up modal -->
    <div class="modal fade" id="signupseeker" tabindex="-1" role="dialog" aria-labelledby="signupLabel">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" name="button"><span style="color:white" aria-hidden="true">&times;</span></button>

                    <img class="img img-responsive center"src="" alt="Smashjob" />

                    <h4 class="modal-title text-center" id="signupLabel"><b>Account Information</b></h4>

                </div>

                <div id="jobseekersignup-modal-body" class="modal-body">

                    <div class="container-fluid">

                        <div class="row">

                              <p style="font-size:12px;color:green;" id="signup-error" class="text-center"></p>

                              <form id="jobseeker-signup-form" action="include/action/jobseekersignupaction.php" method="post" novalidate="">

                                  <div class="col-md-6">

                                      <div class="row">
                                        <div class="form-group has-feedback">
                                            <label for="reg_firstname"><b>Firstname</b></label>
                                            <input type="text" name="reg_first_name" id="reg_first_name" value="" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="reg_lastname"><b>Lastname</b></label>
                                            <input type="text" name="reg_last_name" id="reg_last_name" value="" class="form-control">
                                        </div>


                                        <div class="form-group">
                                            <label for="reg_email"><b>Email Address</b></label>
                                            <input type="email" name="reg_email" id="reg_email" value="" class="form-control">
                                            <p style="font-size:11px;color:red;" id="email-signup-error" class="text-center"></p>
                                       </div>

                                      </div>

                                  </div>

                                  <div class="col-md-6">

                                      <div class="row">

                                        <div class="form-group">
                                            <label for="reg_username"><b>Username</b></label>
                                            <input type="text" name="reg_username" id="reg_username" value="" class="form-control">
                                            <p style="font-size:11px;color:red;" id="username-signup-error" class="text-center"></p>
                                        </div>

                                        <div class="form-group">
                                            <label for="reg_password"><b>Password</b></label>
                                            <input type="password" name="reg_password" id="reg_password" value="" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="reg_confirm_password"><b>Confirm Password</b></label>
                                            <input type="password" name="reg_confirm_password" id="reg_confirm_password" value="" class="form-control">
                                        </div>

                                      </div>

                                  </div>

                                  <button class="btn btn-primary btn-block" id="register-jobseeker" type="submit" name="register-jobseeker">Register</button>

                              </form>

                        </div>

                    </div>

                </div>

                <div class="modal-footer">

                  <div class="container-container text-center">
                      <a class="text-center" id="forgot-password" href="employer-signup.php">Sign up as employer</a>
                  </div>

                   <p class="sign-in-p text-center">
                        Be sure to keep all your details safe as they shall be strictly confidential with us.
                   </p>

                </div>

            </div>

        </div>

    </div><!-- Sign up modal ends-->
