
<?php

session_start();
if (!(isset($_SESSION['uname']) && $_SESSION['uname'] != '')) {
    header("location: ..\..\index.php");
  }

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student</title>
    
      <?php
        require('..\..\styles.php');
        ?>
  </head>
  <body>

  <div id="main-wrapper">

<?php
    require('..\..\headerPage.php');
?>

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav" style="background-color:blue">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a aria-expanded="false"><i>
                                </i><span class="nav-text"><b style="color:white">Full Name:
                                                           </b></span></a>
                    <li><a aria-expanded="false"><i
                               ></i><span class="nav-text" style="color:white"><b>
                                 <?php
                                  // import name from the database
                                  echo "name";
                                  ?>
                               </b></span></a>


                    </li>
                    <li><a aria-expanded="false"><i>
                                </i><span class="nav-text"><b style="color:white">Programme:

                                                           </b></span></a>
                        <li><a aria-expanded="false"><i
                               ></i><span class="nav-text" style="color:white"><b>
                                 <?php
                                  // import Programme from the database
                                  echo "Programme name";
                                  ?>
                               </b></span></a>


                    </li>
                    <li><a aria-expanded="false"><i>
                                </i><span class="nav-text"><b style="color:white">Level:

                                                           </b></span></a>
                        <li><a aria-expanded="false"><i
                               ></i><span class="nav-text" style="color:white"><b>
                                 <?php
                                  // import level from the database
                                  echo "Level";
                                  ?>
                               </b></span></a>
                      
                    </li>
                   


                </ul>
            </div>


        </div>

        <?php
        //Student-Pages
        //require('..\Student-Appraises.php');
        require('..\..\footerPage.php');
        require('..\..\Scripts.php');
         ?>


   
  </body>
</html>
