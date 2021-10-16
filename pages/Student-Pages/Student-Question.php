
<?php

/*session_start();
if (!(isset($_SESSION['uname']) && $_SESSION['uname'] != '')) {
    header("location: ..\..\index.php");
  }
*/
require('..\..\styles.php');
require('..\..\headerPage.php');
?>


<form id="form1" runat="server">
        <!-- row -->
        <div class="container-fluid">
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
                                    <div class="card-header">
                                        
                                        </div>
                                    <div class="card-block">
                                        <!-- Row start -->
                                        <div class="">
                                            <div class="col-lg-12">
                                                <div class="tab-content tabs card-block">
                                                    <div class="tab-pane active" id="home1" role="tabpanel">
                                                        <div class="">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                     <div class="card-body">
                                                                    <div class="col-sm-12 text-center">
                                                                        <h1>UNIVERSITY OF EDUCATION, WINNEBA</h1>
                                                                        <h2>QUALITY ASSURANCE DIRECTORATE</h2>
                                                                        <h2>UDENTS’ APPRAISAL OF COURSES AND TEACHING</h2>
                                                                        <p><b>Confidentiality Statement:</b> The information you provide on this form will be kept strictly confidential. Please, do not write your name nor registration number on the form. Please be very frank with your responses; by honestly and candidly completing this form, you would be providing the University with valuable feedback for self-assessment and academic progression. </p>
                                                                        <h2>SECTION A: Bio-Data
                                                                            Please fill in the following or tick (√) as applicable
                                                                            </h2>
                                                                    </div>
                                                                        <br />
                                                                    <ul class="timeline">
                                                                    <div class="col-sm-10">
                                                                        <h4>1.	Name of Lecturer:</h4>
                                                                            <input type="text" class="form-control">
                                                                            </div>
                                                                        <br />
                                                                     
                                                                     <div class="col-sm-10">
                                                                        
                                                                         <div class="text">
                                                                         <h4>2.	Status of Lecturer: </h4>
                                                                             <input type="radio" class="radio-but" value="Full-Time"> Full-Time 
                                                                             <input type="radio" class="radio-but" value="Part-Time"> Part-Time
                                                                           </div>
                                                                     </div>
                                                                        <br />
                                                                    <div class="col-sm-10">
                                                                        <h4>3.	Department of Lecturer: </h4>
                                                                        <asp:TextBox ID="TextBox2" class="form-control" runat="server"></asp:TextBox>
                                                                            </div>
                                                                        <br />
                                                                    <div class="col-sm-10">
                                                                        <h4>4.	Course Code & Title:  </h4>
                                                                        <asp:TextBox ID="TextBox3" class="form-control" runat="server"></asp:TextBox>
                                                                            </div>
                                                                        <br />
                                                                   <div class="col-sm-10">
                                                                        <h4>5.	Nature of Course:</h4>
                                                                        <div class="text">
                                                                            <asp:RadioButton ID="RadioButton27" CssClass="radio-but" GroupName="ST" runat="server" Text="Lectures only " /> 
                                                                            <asp:RadioButton ID="RadioButton25" CssClass="radio-but" GroupName="ST" runat="server" Text="Practical only  " /> 
                                                                            <asp:RadioButton ID="RadioButton26" CssClass="radio-but" GroupName="ST" runat="server" Text="Both Lectures & Practical " />
                                                                          </div>
                                                                   </div>
                                                                        <br />
                                                                     
                                                                     <div class="col-sm-10">
                                                                        <h4>6.	Academic Year: </h4>
                                                                        <asp:TextBox ID="TextBox4" class="form-control" runat="server"></asp:TextBox>
                                                                            </div>
                                                                        <br />
                                                                     <div class="col-sm-10">
                                                                        <h4>7.	Semester: </h4>
                                                                        <div class="text">
                                                                            <asp:RadioButton ID="RadioButton21" CssClass="radio-but" GroupName="ST" runat="server" Text="First " /> 
                                                                            <asp:RadioButton ID="RadioButton22" CssClass="radio-but" GroupName="ST" runat="server" Text="Second " /> 
                                                                            </div>
                                                                   </div>
                                                                        <br />
                                                                    <div class="col-sm-10">
                                                                        <h4>8.	Sex of Student: </h4>
                                                                        <div class="text">
                                                                            <asp:RadioButton ID="RadioButton28" CssClass="radio-but" GroupName="ST" runat="server" Text="Male " /> 
                                                                            <asp:RadioButton ID="RadioButton29" CssClass="radio-but" GroupName="ST" runat="server" Text="Female " /> 
                                                                            </div>
                                                                   </div>
                                                                        <br />
                                                                   <div class="col-sm-10">
                                                                        <h4>9.	Level of Student:  </h4>
                                                                        <div class="text">
                                                                            <asp:RadioButton ID="RadioButton30" CssClass="radio-but" GroupName="ST" runat="server" Text="100 " /> 
                                                                            <asp:RadioButton ID="RadioButton31" CssClass="radio-but" GroupName="ST" runat="server" Text="200 " /> 
                                                                            <asp:RadioButton ID="RadioButton32" CssClass="radio-but" GroupName="ST" runat="server" Text="300 " /> 
                                                                            <asp:RadioButton ID="RadioButton34" CssClass="radio-but" GroupName="ST" runat="server" Text="400 " /> 
                                                                            </div>
                                                                   </div>
                                                                        <br />
                                                                   
                                                                    <ul>
                                                                    
                                                                </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="widget-timeline">
                                                                        <ul class="timeline">
                                                                            <li>
                                                                                <div class="primary"></div>
                                                                                <h4 class="m-t-5">1) Youtube, a video-sharing website, goes live</h4>
                                                                                 <div class="text-md-right">
                                                                                        <asp:RadioButton ID="RadioButton1" CssClass="radio-but" GroupName="Q1" runat="server" Text="Strongly Agree" /> 
                                                                                        <asp:RadioButton ID="RadioButton2" CssClass="radio-but" GroupName="Q1" runat="server" Text="Agree" />
                                                                                        <asp:RadioButton ID="RadioButton3" CssClass="radio-but" GroupName="Q1" runat="server" Text="Disagree" />
                                                                                        <asp:RadioButton ID="RadioButton4" CssClass="radio-but" GroupName="Q1" runat="server" Text="Strongly Disgree" />
                                                                                    </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="primary"></div>
                                                                                <h4 class="m-t-5">2) Youtube, a video-sharing website, goes live</h4>
                                                                                 <div class="text-md-right">
                                                                                        <asp:RadioButton ID="RadioButton5" CssClass="radio-but" GroupName="Q2" runat="server" Text="Strongly Agree" /> 
                                                                                        <asp:RadioButton ID="RadioButton6" CssClass="radio-but" GroupName="Q2" runat="server" Text="Agree" />
                                                                                        <asp:RadioButton ID="RadioButton7" CssClass="radio-but" GroupName="Q2" runat="server" Text="Disagree" />
                                                                                        <asp:RadioButton ID="RadioButton8" CssClass="radio-but" GroupName="Q2" runat="server" Text="Strongly Disgree" />
                                                                                    </div>
                                                                            </li>

                                                                             <li>
                                                                                <div class=" primary"></div>
                                                                                <h4 class="m-t-5">3) Youtube, a video-sharing website, goes live</h4>
                                                                                 <div class="text-md-right">
                                                                                        <asp:RadioButton ID="RadioButton9" CssClass="radio-but" GroupName="Q3" runat="server" Text="Strongly Agree" /> 
                                                                                        <asp:RadioButton ID="RadioButton10" CssClass="radio-but" GroupName="Q3" runat="server" Text="Agree" />
                                                                                        <asp:RadioButton ID="RadioButton11" CssClass="radio-but" GroupName="Q3" runat="server" Text="Disagree" />
                                                                                        <asp:RadioButton ID="RadioButton12" CssClass="radio-but" GroupName="Q3" runat="server" Text="Strongly Disgree" />
                                                                                    </div>
                                                                            </li>
                                                                           <li>
                                                                                <div class=" primary"></div>
                                                                                <h4 class="m-t-5">4) Youtube, a video-sharing website, goes live</h4>
                                                                                 <div class="text-md-right">
                                                                                        <asp:RadioButton ID="RadioButton13" CssClass="radio-but" GroupName="Q4" runat="server" Text="Strongly Agree" /> 
                                                                                        <asp:RadioButton ID="RadioButton14" CssClass="radio-but" GroupName="Q4" runat="server" Text="Agree" />
                                                                                        <asp:RadioButton ID="RadioButton15" CssClass="radio-but" GroupName="Q4" runat="server" Text="Disagree" />
                                                                                        <asp:RadioButton ID="RadioButton16" CssClass="radio-but" GroupName="Q4" runat="server" Text="Strongly Disgree" />
                                                                                    </div>
                                                                            </li>
                                                                             <li>
                                                                                <div class=" primary"></div>
                                                                                <h4 class="m-t-5">2) Youtube, a video-sharing website, goes live</h4>
                                                                                 <div class="text-md-right">
                                                                                        <asp:RadioButton ID="RadioButton17" CssClass="radio-but" GroupName="Q1" runat="server" Text="Strongly Agree" /> 
                                                                                        <asp:RadioButton ID="RadioButton18" CssClass="radio-but" GroupName="Q1" runat="server" Text="Agree" />
                                                                                        <asp:RadioButton ID="RadioButton19" CssClass="radio-but" GroupName="Q1" runat="server" Text="Disagree" />
                                                                                        <asp:RadioButton ID="RadioButton20" CssClass="radio-but" GroupName="Q1" runat="server" Text="Strongly Disgree" />
                                                                                    </div>
                                                                            </li>

                                                                            <li>
                                                                                
                                                                                <a class="timeline-panel " href="#">
                                                                                   <div class="card-body text-center">
                                                                            <asp:Button class="btn btn-primary" ID="Button2" runat="server" Text="Generate" />
                                                                            
                                                                            <asp:Button class="btn btn-primary" ID="Button4" runat="server" Text="Print Report" />
                                                                           
                                                                        </div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>
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
       
    </form>

<?php
    //Student-Pages
    //require('..\Student-Appraises.php');
    require('..\..\footerPage.php');
    require('..\..\Scripts.php');
?>