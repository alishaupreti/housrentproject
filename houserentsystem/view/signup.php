<?php
include 'view/header.php';
?>



<div id="signupbox" style=" margin-top:50px;
 " class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 ">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                             </div>  
                        <div class="panel-body" >
                            
                      <form action="<?php echo $base_url ?>?r=signup" class="form-horizontal" method="post" enctype="multipart/form-data">
          
                                <div class="form-group">
                                    <label for="name" class="col-md-3 control-label">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control validate" name="name" placeholder="Enter your name" oninvalid="this.setCustomValidity('Enter User Name Here')"
                                   oninput="setCustomValidity('')"  class="form-control">
                                    </div>
                                </div>
                          
                                    
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email"  value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" placeholder="Enter your email">
                                    </div>
                                </div>
                             
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="address" class="col-md-3 control-label">Address</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="address" placeholder="Enter Address">
                                    </div>
                                </div>
                           <div class="form-group">
                                    <label for="Phone" class="col-md-3 control-label">Phone</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number" pattern="[1-9]{1}[0-9]{9}">
                                    </div>
                                </div>

                          <div class="form-group">
                    <label for="fileToUpload" class="col-md-3 control-label">Image</label>
                    <div class="col-md-9">
                        <input type="file" name="fileToUpload" id="fileToUpload" class="waves-effect left">
                    </div>
                </div>



                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="button1" type="submit" class="btn btn-success waves-effect"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                           
                                    </div>
                                </div>
                                 <div class="col-md-12 control">
                              <div style=" font-size:15px !important;border-top: 1px solid#888; padding-top:15px; font-size:85%" > 
                                        Already have an account! 
                                        <a id="button1"href="<?php echo $base_url?>?r=login">
                                            &nbsp; Login Here
                                        </a>                                           
                              </div>
                                </div>
                                
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 

<?php
include 'view/footer.php';
?>