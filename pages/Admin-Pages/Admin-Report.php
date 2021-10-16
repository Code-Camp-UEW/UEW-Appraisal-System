<?php
	require('Admin-Header.php');
 ?>
 <div class="content-body">
<!-- row -->
  <div class="container-fluid">
  <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                   
                    <!-- Page-header end -->
                                    
                    <!-- Page body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Bootstrap tab card start -->
                                <div class="card">
                                    <div class="card-header">
                                        
                                        </div>
                                    <div class="card-block">
                                        <!-- Row start -->
                                        <div class="row">
                                            <div class="col-lg-12 col-xl-12">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs  tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#home1" role="tab"><b>Individual Report</b></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#profile1" role="tab"><b>Threshold Report</b></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#settings1" role="tab"><b>Department Report</b></a>
                                                    </li>
                                                   
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content tabs card-block">
                                                    <div class="tab-pane active" id="home1" role="tabpanel">
                                                    <form action="..\..\includes\IndividualReport.inc.php" method="POST">
                                                        <div class="card">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5 class="card-title">Individual Report</h5>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="col-sm-10">
                                                                        <select class="form-control" name="cmbDepartment" id="">
                                                                            
                                                                        </select>
                                                                    </div>
                                                                        <br />
                                                                    <div class="col-sm-10">
                                                                        <select class="form-control" name="cmbLecturer" id="">
                                                                            
                                                                        </select>
                                                                    </div>
                                                                        <br />
                                                                    <div class="col-sm-10">
                                                                        <select class="form-control" name="cmbSession" id="">

                                                                        </select>
                                                                    </div>
                                                                        <br />
                                                                    <div class="col-sm-10">
                                                                        <select class="form-control" name="cmbCourse" id="">
                                                                        
                                                                        </select>
                                                                    </div>
                                                                        <br />

                                                                    <div class="card-body text-center">
                                                                            
                                                                      <button class="btn btn-primary" name="btnGenerateIndivid">Generate</button>

                                                                      <button class="btn btn-primary" name="btnPrintIndivid">Print Report</button>
                                                                       
                                                                    </div>
                                                                </div>
                                                               
                                                            </div>
                                                       
                                                            
                                                                <div class="card">
                                                                <div class="card-header">
                                                                    <h5 class="card-title">Report</h5>
                                                                </div>
                                                                <div class="card-body">
                                                                        <h5 class="">Name of Leturer: </h5>
                                                                            
                                                                        <br />

                                                                        <h5 class="">Course Code: </h5>
                                                                            
                                                                        <br />

                                                                        <h5 class="">Course Title: </h5>
                                                                            
                                                                        <br />

                                                                        <h5 class="">Accademic Year: </h5>
                                                                            
                                                                        <br />

                                                                        <h5 class="">Semester: </h5>
                                                                            
                                                                        <br />
                                                                   
                                                                        <h5 class="">Total Number of Responds: </h5>
                                                                            
                                                                        <br />

                                                                        <h5 class="">Percentage of Responds: </h5>
                                                                            
                                                                        <br />

                                                                        <h5 class="">Class Size: </h5>
                                                                            
                                                                        <br />
                                                                    
                                                                        
                                                                </div> 
                                                            </div>
                                                         </div>
                                                         </form>
                                                    </div>
                                                   
                                                    <div class="tab-pane" id="profile1" role="tabpanel">
                                                    <form action="..\..\includes\ThresholdReport.inc.php" method="POST">
                                                        <div class="card">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5 class="card-title">Threshold Report</h5>
                                                                </div>
                                                                <div class="card-body">
                                                                    
                                                                    <div class="col-sm-10">
                                                                        <select class="form-control" name="cmbSessionThreshold" id="">

                                                                        </select>
                                                                    </div>
                                                                        <br />
                                                                    <div class="col-sm-10">
                                                                        <select class="form-control" name="cmbLecturerThreshold" id="">

                                                                        </select>
                                                                    </div>
                                                                        <br />

                                                                    <div class="card-body text-center">
                                                                            
                                                                      <button class="btn btn-primary" name="btnGenerateThreshold">Generate</button>

                                                                      <button class="btn btn-primary" name="btnPrintThresholdReport">Print Report</button>

                                                                      <button class="btn btn-primary" name="btnPrintThresholdList">Print List</button>
                                                                       
                                                                    </div>
                                                                </div>
                                                               
                                                            </div>
                                                       
                                                            
                                                                <div class="card">
                                                                <div class="card-header">
                                                                    <h5 class="card-title">Report</h5>
                                                                </div>
                                                                <div class="card-body">
                                                                    <h5 class="">Name of Leturer: </h5>
                                                                        
                                                                    <br />

                                                                    <h5 class="">Course Code: </h5>
                                                                        
                                                                    <br />

                                                                    <h5 class="">Course Title: </h5>
                                                                        
                                                                    <br />

                                                                    <h5 class="">Accademic Year: </h5>
                                                                        
                                                                    <br />

                                                                    <h5 class="">Semester: </h5>
                                                                        
                                                                    <br />
                                                                
                                                                    <h5 class="">Total Number of Responds: </h5>
                                                                        
                                                                    <br />

                                                                    <h5 class="">Percentage of Responds: </h5>
                                                                        
                                                                    <br />

                                                                    <h5 class="">Class Size: </h5>
                                                                        
                                                                    <br />   
                                                                </div> 
                                                            </div>
                                                         </div>
                                                         </form>
                                                    </div>
                                                    
                                                <div class="tab-pane" id="settings1" role="tabpanel">
                                                    <div class="card">
                                                        <form action="..\..\includes\DepartmentReport.inc.php" method="POST">
                                                            <div class="card">
                                                                
                                                                <div class="card-header">
                                                                    <h5 class="card-title">Departmental Report</h5>
                                                                </div>
                                                                <div class="card-body">
                                                                    
                                                                    <div class="col-sm-10">
                                                                        <select class="form-control" name="cmbSelectDepatmental" id="">

                                                                        </select>
                                                                    </div>
                                                                        <br />
                                                                    <div class="col-sm-10">
                                                                        <select class="form-control" name="cmbAccademicYear" id="">

                                                                        </select>
                                                                    </div>
                                                                        <br />

                                                                    <div class="card-body text-center">
                                                                      
                                                                      <button class="btn btn-primary" name="btnDepartmentalReport">Print Report</button>
                                                                    </div>
                                                                </div>
                                                               
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5 class="card-title">Report</h5>
                                                                </div>
                                                                <div class="card-body">
                                                                    <h5 class="">Name of Leturer: </h5>
                                                                        
                                                                    <br />

                                                                    <h5 class="">Course Code: </h5>
                                                                        
                                                                    <br />

                                                                    <h5 class="">Course Title: </h5>
                                                                        
                                                                    <br />

                                                                    <h5 class="">Accademic Year: </h5>
                                                                        
                                                                    <br />

                                                                    <h5 class="">Semester: </h5>
                                                                        
                                                                    <br />
                                                                
                                                                    <h5 class="">Total Number of Responds: </h5>
                                                                        
                                                                    <br />

                                                                    <h5 class="">Percentage of Responds: </h5>
                                                                        
                                                                    <br />

                                                                    <h5 class="">Class Size: </h5>
                                                                        
                                                                    <br />  
                                                                </div> 
                                                            </div>
                                                         </div>
                                                         </form>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Row end -->
                                    </div>
                                </div>
                                <!-- Bootstrap tab card end -->
                            </div>
                        </div>
                        
                    </div>
                    <!-- Page body end -->
                </div>
            </div>
            <!-- Main-body end -->

            <div id="styleSelector">

            </div>
        </div>

</div>
 </div>
