<?php
require('Admin-Header.php');

 ?>
 <div class="content-body">
<!-- row -->
  <div class="container-fluid">

    <div class="pcoded-content">
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
                                                           <a class="nav-link active" data-toggle="tab" href="#home1" role="tab"><b>Send Mail(All)</b></a>
                                                       </li>
                                                       <li class="nav-item">
                                                           <a class="nav-link" data-toggle="tab" href="#profile1" role="tab"><b>Add Email Address</b></a>
                                                       </li>
                                                       <li class="nav-item">
                                                           <a class="nav-link" data-toggle="tab" href="#settings1" role="tab"><b>Send Mail(Select)</b></a>
                                                       </li>

                                                   </ul>
                                                   <!-- Tab panes -->
                                                   <div class="tab-content tabs card-block">
                                                       <div class="tab-pane active" id="home1" role="tabpanel">
                                                           <form action="..\..\includes\SendMailAll.inc.php" method="POST">
                                                                <div class="card">

                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="card">

                                                                            <div class="card-body">

                                                                                <div class="col-sm-10">
                                                                                    <textarea name="txtMessageAll" class="form-control" rows="8" cols="80"></textarea>
                                                                                    </div>
                                                                                <br />
                                                                                <div class="card-body text-center">
                                                                                    <button type="submit" class="btn btn-primary" name="btnSendMessageAll">Send</button>

                                                                                    <button type="submit" class="btn btn-primary" name="btnSetDefault">Set default</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="card">
                                                                            <div class="card-header">

                                                                                <div class="col-sm-10">
                                                                                    <input type="text" class="form-control" placeholder="Search" name="txtSearchEmail1" value="">
                                                                                    </div>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div id="vmap11" class="vmap">
                                                                                    <div class="table-responsive">

                                                                                        <asp:GridView class="table mb-0" ID="GridView1" runat="server"></asp:GridView>
                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </form>
                                                       </div>
                                                       <div class="tab-pane" id="profile1" role="tabpanel">
                                                           <form action="..\..\includes\AddEmailAddress.inc.php" method="POST">
                                                           <div class="card">

                                                           <div class="row">
                                                               <div class="col-lg-6">
                                                                   <div class="card">

                                                                       <div class="card-body">
                                                                           <div class="col-sm-10">
                                                                               <input type="text" class="form-control" placeholder="Lecturer ID" name="txtLecturerID" value="">
                                                                               </div>
                                                                           <br />
                                                                           <div class="col-sm-10">
                                                                               <input type="text" class="form-control" placeholder="Lecturer Email" name="txtLecturerEmail1" value="">
                                                                               </div>
                                                                           <br />
                                                                           <div class="col-sm-10 text-center">
                                                                              <button type="submit" class="btn btn-primary" name="btnAddEmail">Add Email</button>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                               <div class="col-lg-6">
                                                                   <div class="card">
                                                                       <div class="card-header">

                                                                           <div class="col-sm-10">
                                                                               <input type="text" class="form-control" placeholder="Search" name="txtSearchEmail2" value="">
                                                                               </div>
                                                                       </div>
                                                                       <div class="card-body">
                                                                           <div id="vmap13" class="vmap">
                                                                               <div class="table-responsive">
                                                                                   <asp:GridView class="table mb-0" ID="GridView2" runat="server"></asp:GridView>
                                                                           </div>
                                                                          </div>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                            </div>
                                                            </form>
                                                       </div>

                                                       <div class="tab-pane" id="settings1" role="tabpanel">
                                                           <form action="..\..\includes\SendMailSelect.inc.php" method="POST">
                                                           <div class="card">

                                                           <div class="row">
                                                               <div class="col-lg-6">
                                                                   <div class="card">

                                                                       <div class="card-body">
                                                                           <div class="col-sm-10">
                                                                               <input type="text" class="form-control" placeholder="Lecturer Email" name="txtLecturerEmail" value="">
                                                                               </div>
                                                                           <br />
                                                                           <div class="col-sm-10">
                                                                               <textarea name="txtMessage1" class="form-control" placeholder="Enter Message" rows="8" cols="80"></textarea>
                                                                               </div>
                                                                           <br />
                                                                           <div class="col-sm-10 text-center">
                                                                             <button type="submit" class="btn btn-primary" name="btnSendEmailSelect">Send Email</button>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                               <div class="col-lg-6">
                                                                   <div class="card">
                                                                       <div class="card-header">

                                                                           <div class="col-sm-10">
                                                                               <input type="text" class="form-control" placeholder="Search" name="txtSearchEmail3" value="">
                                                                               </div>
                                                                       </div>
                                                                       <div class="card-body">
                                                                           <div id="vmap14" class="vmap">
                                                                               <div class="table-responsive">
                                                                                   <asp:GridView class="table mb-0" ID="GridView3" runat="server"></asp:GridView>
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
   
