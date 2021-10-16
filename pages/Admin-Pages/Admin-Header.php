<?php

session_start();
if (!(isset($_SESSION['uname']) && $_SESSION['uname'] != '')) {
    header("location: ..\..\index.php");
  }

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>admin</title>
    <!-- Favicon icon -->
   <?php
        require('..\..\styles.php');
   ?>



</head>

<body>

  


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

    <?php
        require('..\..\headerPage.php');
   ?>

    

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav" style="background-color:blue">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    
                <li><a class="has-arrow" href="Admin-Setting.php " aria-expanded="false"><i
                              class="icon icon-app-store"></i><span class="nav-text">Settings</span></a>
                  </li>

                  <li><a class="has-arrow" href="Admin-Email.php" aria-expanded="false"><i
                              class="icon icon-plug"></i><span class="nav-text">Mails</span></a>
                  </li>

                  <li><a class="has-arrow" href="Admin-Report.php" aria-expanded="false"><i
                              class="icon icon-world-2"></i><span class="nav-text">Report</span></a>
                  </li>

                  <li><a class="has-arrow" href="Admin-Staticstics.php" aria-expanded="false"><i
                              class="icon icon-chart-bar-33 "></i><span class="nav-text">Statistics</span></a>
                  </li>
            </div>


        </div>
        

        <?php
        require('..\..\footerPage.php');
        require('..\..\Scripts.php');
         ?>

    

</body>

</html>