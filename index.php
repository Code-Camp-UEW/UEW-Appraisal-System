<?php
declare(strict_types = 1);
include 'includes/autoload.inc.php';
//require('dbConn.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>

    <?php
        require('styles.php');
    ?>
  </head>
  <body>
   <section class="login p-fixed d-flex text-center bg-primary">
       <!-- Container-fluid starts -->
       <div class="container">
           <div class="row">
               <div class="col-sm-12">
                   <!-- Authentication card start -->
                   <div class="login-card card-block auth-body mr-auto ml-auto">
                       <div class="md-float-material">
                           <div class="text-center">
                              <h2>University of Education, Winneba</h3>
                              <h4>Quality Assurance Directorate (QAD)</h4>
                           </div>
                           <div class="auth-box">
                               <div class="row m-b-20">
                                   <div class="col-md-12 text-center">
                                       <h3 class="text-left txt-primary">Sign In</h3>
                                   </div>
                               </div>
                               <form id="form1" action="includes\login.inc.php" method="post">
                               <div class="input-group">
                                <input type="text" class="form-control" name="txtUsername" value="" required>
                                   <span class="md-line"></span>
                               </div>
                               <div class="input-group">
                                   <input type="password" class="form-control" name="txtPassword" value="">
                                   <span class="md-line"></span>
                               </div>
                               <div class="row m-t-30">
                                   <div class="col-md-12">
                                     <input type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20" name="btn_login" value="Sign In">

                                    </div>
                               </div>
                              </form>
                               <div class="row">
                                   <div class="col-md-10">
                                       <p class="text-inverse text-left m-b-0">Thank you and enjoy our website.</p>
                                       <p class="text-inverse text-left"><b>Your Authentication Team</b></p>
                                   </div>
                                   <div class="col-md-2">
                                       <img src="pix/uew_logo.png" alt="small-logo.png" style="width:50px; height:50px">
                                   </div>
                               </div>

                           </div>
                       </div>
                       <!-- end of form -->
                   </div>
                   <!-- Authentication card end -->
               </div>
               <!-- end of col-sm-12 -->
           </div>
           <!-- end of row -->
       </div>
       <!-- end of container-fluid -->
   </section>

   <?php
        require('Scripts.php');
    ?>
  
  </body>
</html>
