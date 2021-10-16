<!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header" style="background-color:blue">
            <a href="index.html" class="brand-logo">
               
                <img class="logo-compact" src="../../pix/uew_logo.png" alt="">
                <img class="brand-title" src="../../pix/uew_logo.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header" style="background-color:red">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    
                        <div class="header-left">
                        
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                        <label for="" style="color: white; font-size: 25px">
                                            <?php 
                                                echo  $_SESSION['uname']; 
                                            ?>
                                        </label>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    
                                    <a href="..\..\index.php" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                        </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->