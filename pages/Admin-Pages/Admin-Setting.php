<?php
require('Admin-Header.php');
 ?>

<div class="content-body">
<!-- row -->
  <div class="container-fluid">
  <div class="card-body">
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">

                    <!-- Page body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Bootstrap tab card start -->
                                <div class="card">
                                    <div class="card-block">
                                        <!-- Row start -->
                                        <div class="row">
                                            <div class="col-lg-12 col-xl-12">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs  tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#home1" role="tab"><b>Appraisal Period</b></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#profile1" role="tab"><b>Threshold</b></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#messages1" role="tab"><b>Queries</b></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#settings1" role="tab"><b>System</b></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#settings2" role="tab"><b>Users</b></a>
                                                    </li>
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content tabs card-block">
                                                    <div class="tab-pane active" id="home1" role="tabpanel">

                                                         <!-- forms for setting apprasal -->
                                                    <form action="..\..\includes\setAppraisalPeriod.inc.php" method="POST">
                                                        <div class="card">

                                                            <div class="">
                                                            
                                                                <div class="col-md-7 ">
                                                                    <div class="card-body">
                                                                        <div class="basic-form">
                                                                            <div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-4 col-form-label">Accademic Year</label>
                                                                                    <div class="col-sm-12">
                                                                                        <input type="text" class="form-control"  name="txtAccademicYear1" value="">

                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-4 col-form-label">Semister</label>
                                                                                    <div class="col-sm-12">
                                                                                        <select class="form-control"  name="cmbSemister1">
                                                                                        <option value="First Semister">First Semister</option>
                                                                                        <option value="Second Semister">Second Semister</option>

                                                                                        </select>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-4 col-form-label">Start Date</label>
                                                                                    <div class="col-sm-12">
                                                                                        <input type="date" class="form-control"  name="dtStartDate" value="">

                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-4 col-form-label">End Date</label>
                                                                                    <div class="col-sm-12">
                                                                                        <input type="date" class="form-control"  name="dtEndDate" value="">
                                                                                        </div>
                                                                                </div>

                                                                                <div class="form-group row">
                                                                                    <div class="col-sm-12">
                                                                                        <div class="form-check">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-sm-12 card-body text-center">
                                                                                    
                                                                                        <button type="submit" class="btn btn-primary" name="btnCeateApprasalPeriod">Create</button>
                                                                                        <button type="submit" class="btn btn-danger" name="btnRemoveApprasalPeriod">Remove</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered table-striped" >
                                                                            <thead>
                                                                                <tr>
                                                                                    <th class="text-center text-dark">
                                                                                        Accademic Year<br>
                                                                                    </th>
                                                                                    <th class="text-center text-dark">
                                                                                        Semister<br>
                                                                                    </th>
                                                                                    <th class="text-center text-dark">
                                                                                        Start Date<br>
                                                                                    </th>
                                                                                    <th class="text-center text-dark">
                                                                                        End Date<br>
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    </div>
                                                    <div class="tab-pane" id="profile1" role="tabpanel">
                                                    <form action="..\..\includes\setThreshold.inc.php" method="POST">
                                                        <div class="card">
                                                        <div class="card-body">
                                                            <div class="basic-form">
                                                                <div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label">Accademic Year</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" name="txtAccademicYear2" value="">

                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label">Semister</label>
                                                                        <div class="col-sm-10">
                                                                          <select class="form-control"  name="cmbSemister2">
                                                                              <option value="First Semister">First Semister</option>
                                                                              <option value="Second Semister">Second Semister</option>

                                                                          </select>
                                                                            </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label">Threshold (%)</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="number" class="form-control" name="txtThreshold" value="">

                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label">Number of Question</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="number" class="form-control" name="txtNumOfQuestions" value="">
                                                                            </div>
                                                                    </div>

                                                                    <div class="card-body">
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-12 card-body text-center">
                                                                            <button type="submit" class="btn btn-primary" name="btnCreateThreshold">Create</button>
                                                                       
                                                                            <button type="submit" class="btn btn-danger" name="btnDeleteThreshold">Delate</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-check">
                                                                                <div class="table-responsive">
                                                                                    <table class="table table-bordered table-striped" >
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th class="text-center text-dark">
                                                                                                    Accademic Year<br>
                                                                                                </th>
                                                                                                <th class="text-center text-dark">
                                                                                                    Semister<br>
                                                                                                </th>
                                                                                                <th class="text-center text-dark">
                                                                                                    Threshold (%)<br>
                                                                                                </th>
                                                                                                <th class="text-center text-dark">
                                                                                                    Number of Question<br>
                                                                                                </th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </form>
                                                    </div>
                                                    <div class="tab-pane" id="messages1" role="tabpanel">
                                                    <form action="..\..\includes\setQueries.inc.php" method="POST">

                                                    <div class="card-body">
                                                       <div class="align-items-center">
                                                            <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Accademic Year</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control"  name="txtAccademicYear3" value="">

                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-4 col-form-label">Semister</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="form-control"  name="cmbSemister3">
                                                                            <option value="First Semister">First Semister</option>
                                                                            <option value="Second Semister">Second Semister</option>
                                                                        </select>
                                                                    </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-4 col-form-label">Sava Data</label>
                                                                <div class="col-sm-10">
                                                                    <input type="date" class="form-control"  name="txtSaveData" value="">

                                                                </div>
                                                            </div>
                                                       </div>
                                                    </div>
                                                    <div class="col-sm-13 card-body text-center">

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="card-body">
                                                            <div class="basic-form">
                                                                <div>

                                                                    <div class="form-group row">
                                                                        <label class="col-sm-10 col-form-label center">Lecturer Details</label>
                                                                        <div class="col-sm-10">
                                                                        <button type="submit" class="btn btn-primary col-10" name="btnInsertLecturerDetails">insert</button>
                                                                            </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label class="col-sm-10 col-form-label center">Course Details</label>
                                                                        <div class="col-sm-10">
                                                                        <button type="submit" class="btn btn-primary col-10" name="btnInsertCourseDetails">insert</button>
                                                                            </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label class="col-sm-10 col-form-label center">Lecturer Assignments</label>
                                                                        <div class="col-sm-10">
                                                                        <button type="submit" class="btn btn-primary col-10" name="btnInsertLecturerAssignments">insert</button>
                                                                            </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label class="col-sm-10 col-form-label center">Departments</label>
                                                                        <div class="col-sm-10">
                                                                        <button type="submit" class="btn btn-primary col-10" name="btnInsertDepartments">insert</button>
                                                                            </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label class="col-sm-10 col-form-label center">Student Details</label>
                                                                        <div class="col-sm-10">
                                                                        <button type="submit" class="btn btn-primary col-10" name="btnInsertStudentDetails">insert</button>
                                                                            </div>
                                                                    </div>


                                                                    <div class="form-group row">
                                                                        <label class="col-sm-10 col-form-label center">Student Registration</label>
                                                                        <div class="col-sm-10">
                                                                        <button type="submit" class="btn btn-primary col-10" name="btnInsertStudentRegistration">insert</button>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                <div class="card-body">

                                                                <div class="form-group row">
                                                                        <label class="col-sm-10 col-form-label center">Lecturer Details</label>
                                                                        <div class="col-sm-10">
                                                                        <button type="submit" class="btn btn-danger col-10" name="btnDeleteLecturerDetails">Delete</button>
                                                                            </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label class="col-sm-10 col-form-label center">Course Details</label>
                                                                        <div class="col-sm-10">
                                                                        <button type="submit" class="btn btn-danger col-10" name="btnDeleteCourseDetails">Delete</button>
                                                                            </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label class="col-sm-10 col-form-label center">Lecturer Assignments</label>
                                                                        <div class="col-sm-10">
                                                                        <button type="submit" class="btn btn-danger col-10" name="btnDeleteLecturerAssignments">Delete</button>
                                                                            </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label class="col-sm-10 col-form-label center">Departments</label>
                                                                        <div class="col-sm-10">
                                                                        <button type="submit" class="btn btn-danger col-10" name="btnDeleteDepartments">Delete</button>
                                                                            </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label class="col-sm-10 col-form-label center">Student Details</label>
                                                                        <div class="col-sm-10">
                                                                        <button type="submit" class="btn btn-danger col-10" name="btnDeleteStudentDetails">Delete</button>
                                                                            </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label class="col-sm-10 col-form-label center">Student Registration</label>
                                                                        <div class="col-sm-10">
                                                                        <button type="submit" class="btn btn-danger col-10" name="btnDeleteStudentRegistration">Delete</button>
                                                                            </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    </form>
                                                    </div>
                                                    <div class="tab-pane" id="settings1" role="tabpanel">
                                                    <form action="..\..\includes\setSystem.inc.php" method="POST">
                                                        <div class="card">

                                                        <div class="card-body">
                                                            <div class="basic-form">
                                                                <div class="text-center">
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-10 btn-group-lg">
                                                                            <button type="submit" class="btn btn-danger" name="btnReset">Reset</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </form>
                                                    </div>
                                                    <div class="tab-pane" id="settings2" role="tabpanel">
                                                    <form action="..\..\includes\setUsers.inc.php" method="POST">
                                                        <div class="card">

                                                        <div class="card-body">
                                                            <div class="basic-form">
                                                                <div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label">Username</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" name="txtUsername" value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label">Password</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="password" class="form-control" name="txtPassword" value="">
                                                                        </div>
                                                                    </div>
                                                                     <div class="form-group row">
                                                                        <div class="col-sm-10">
                                                                            <button type="submit" class="btn btn-primary" name="btnAdduser">Add User</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-check">
                                                                                <div class="table-responsive">
                                                                                <table class="table table-bordered table-striped" >
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th class="text-center text-dark">
                                                                                                    Username<br>
                                                                                                </th>
                                                                                                <th class="text-center text-dark">
                                                                                                    Admin<br>
                                                                                                </th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                                
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                                
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                               
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                                
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
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
</div>
</div>
