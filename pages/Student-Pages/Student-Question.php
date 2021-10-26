
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
                                                                        <h4>1. Name of Lecturer:</h4>
                                                                            <input type="text" class="form-control">
                                                                            </div>
                                                                        <br />
                                                                     
                                                                     <div class="col-sm-10">
                                                                        
                                                                         <div class="text">
                                                                         <h4>2. Status of Lecturer: </h4>
                                                                            <input type="radio" class="radio-but" value="Full-Time"> Full-Time 
                                                                            <input type="radio" class="radio-but" value="Part-Time"> Part-Time
                                                                           </div>
                                                                     </div>
                                                                        <br />
                                                                    <div class="col-sm-10">
                                                                        <h4>3. Department of Lecturer: </h4>
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                        <br />
                                                                    <div class="col-sm-10">
                                                                        <h4>4. Course Code & Title:  </h4>
                                                                        <input type="text" class="form-control">
                                                                            </div>
                                                                        <br />
                                                                   <div class="col-lg-10">
                                                                        <h4>5. Nature of Course:</h4>
                                                                        <div class="text">
                                                                            <input type="radio" class="radio-but" value="Full-Time"> Lectures only 
                                                                            <input type="radio" class="radio-but" value="Part-Time"> Practical only
                                                                            <input type="radio" class="radio-but" value="Full-Time"> Both Lectures & Practical
                                                                        </div>
                                                                   </div>
                                                                        <br />
                                                                     
                                                                     <div class="col-sm-10">
                                                                        <h4>6.	Academic Year: </h4>
                                                                        <input type="text" class="form-control">
                                                                            </div>
                                                                        <br />
                                                                     <div class="col-sm-10">
                                                                        <h4>7.	Semester: </h4>
                                                                        <div class="text">
                                                                            <input type="radio" class="radio-but" value="Full-Time"> First 
                                                                            <input type="radio" class="radio-but" value="Part-Time"> Second 
                                                                        </div>
                                                                   </div>
                                                                        <br />
                                                                    <div class="col-sm-10">
                                                                        <h4>8.	Sex of Student: </h4>
                                                                        <div class="text">
                                                                            <input type="radio" class="radio-but" value="Full-Time"> Male 
                                                                            <input type="radio" class="radio-but" value="Part-Time"> Female
                                                                        </div>
                                                                   </div>
                                                                        <br />
                                                                   <div class="col-sm-10">
                                                                        <h4>9.	Level of Student:  </h4>
                                                                        <div class="text">
                                                                            <input type="radio" class="radio-but" value="Full-Time"> 100 
                                                                            <input type="radio" class="radio-but" value="Part-Time"> 200
                                                                            <input type="radio" class="radio-but" value="Full-Time"> 300 
                                                                            <input type="radio" class="radio-but" value="Part-Time"> 400
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
                                                                                <h4 class="m-t-5">10. Lecturer provided a comprehensive outline at the beginning of the course</h4>
                                                                                <div class="text-md-right">
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Strongly Agree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Agree
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Disagree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Strongly Disgree
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="primary"></div>
                                                                                <h4 class="m-t-5">11. The course content was taught based on the outline provided</h4>
                                                                                <div class="text-md-right">
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Strongly Agree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Agree
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Disagree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Strongly Disgree
                                                                                </div>
                                                                            </li>

                                                                             <li>
                                                                                <div class=" primary"></div>
                                                                                <h4 class="m-t-5">12. The course content has been adequately covered this semester</h4>
                                                                                <div class="text-md-right">
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Strongly Agree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Agree
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Disagree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Strongly Disgree
                                                                                </div>
                                                                            </li>
                                                                           <li>
                                                                                <div class=" primary"></div>
                                                                                <h4 class="m-t-5">13. The course is relevant to my programme of study</h4>
                                                                                <div class="text-md-right">
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Strongly Agree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Agree
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Disagree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Strongly Disgree
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class=" primary"></div>
                                                                                <h4 class="m-t-5">14. The Lecturer attended class regularly</h4>
                                                                                <div class="text-md-right">
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Strongly Agree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Agree
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Disagree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Strongly Disgree
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="primary"></div>
                                                                                <h4 class="m-t-5">15. The Lecturer was punctual to class</h4>
                                                                                <div class="text-md-right">
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Strongly Agree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Agree
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Disagree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Strongly Disgree
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="primary"></div>
                                                                                <h4 class="m-t-5">16. The Lecturer used class time fully to promote learning</h4>
                                                                                <div class="text-md-right">
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Strongly Agree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Agree
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Disagree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Strongly Disgree
                                                                                </div>
                                                                            </li>

                                                                             <li>
                                                                                <div class=" primary"></div>
                                                                                <h4 class="m-t-5">17. The Lecturer gave adequate number of assignments and quizzes (minimum of 2)</h4>
                                                                                <div class="text-md-right">
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Strongly Agree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Agree
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Disagree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Strongly Disgree
                                                                                </div>
                                                                            </li>
                                                                           <li>
                                                                                <div class=" primary"></div>
                                                                                <h4 class="m-t-5">18. Assignments/quizzes were promptly marked and returned</h4>
                                                                                <div class="text-md-right">
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Strongly Agree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Agree
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Disagree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Strongly Disgree
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class=" primary"></div>
                                                                                <h4 class="m-t-5">19. Assignments/quizzes were subsequently discussed in class or at tutorials</h4>
                                                                                <div class="text-md-right">
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Strongly Agree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Agree
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Disagree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Strongly Disgree
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="primary"></div>
                                                                                <h4 class="m-t-5">20. The Lecturer was genuinely concerned with students’ progress</h4>
                                                                                <div class="text-md-right">
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Strongly Agree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Agree
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Disagree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Strongly Disgree
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="primary"></div>
                                                                                <h4 class="m-t-5">21. The Lecturer demonstrated knowledge of the subject matter</h4>
                                                                                <div class="text-md-right">
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Strongly Agree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Agree
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Disagree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Strongly Disgree
                                                                                </div>
                                                                            </li>

                                                                             <li>
                                                                                <div class=" primary"></div>
                                                                                <h4 class="m-t-5">22. The Lecturer’s delivery was systematic and well organised</h4>
                                                                                <div class="text-md-right">
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Strongly Agree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Agree
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Disagree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Strongly Disgree
                                                                                </div>
                                                                            </li>
                                                                           <li>
                                                                                <div class=" primary"></div>
                                                                                <h4 class="m-t-5">23. The Lecturer clearly presented ideas and concepts of topics</h4>
                                                                                <div class="text-md-right">
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Strongly Agree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Agree
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Disagree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Strongly Disgree
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class=" primary"></div>
                                                                                <h4 class="m-t-5">24. The Lecturer encouraged critical thinking</h4>
                                                                                <div class="text-md-right">
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Strongly Agree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Agree
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Disagree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Strongly Disgree
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="primary"></div>
                                                                                <h4 class="m-t-5">25. The Lecturer delivered at an appropriate pace/speed</h4>
                                                                                <div class="text-md-right">
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Strongly Agree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Agree
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Disagree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Strongly Disgree
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="primary"></div>
                                                                                <h4 class="m-t-5">26. The Lecturer made room for questions and expression of opinions</h4>
                                                                                <div class="text-md-right">
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Strongly Agree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Agree
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Disagree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Strongly Disgree
                                                                                </div>
                                                                            </li>

                                                                             <li>
                                                                                <div class=" primary"></div>
                                                                                <h4 class="m-t-5">27. The Lecturer responded positively to students’ questions and concerns</h4>
                                                                                <div class="text-md-right">
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Strongly Agree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Agree
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Disagree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Strongly Disgree
                                                                                </div>
                                                                            </li>
                                                                           <li>
                                                                                <div class=" primary"></div>
                                                                                <h4 class="m-t-5">28. The Lecturer effectively communicated what s/he was teaching</h4>
                                                                                <div class="text-md-right">
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Strongly Agree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Agree
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Disagree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Strongly Disgree
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class=" primary"></div>
                                                                                <h4 class="m-t-5">29. The Library is well-stocked with relevant course textbooks, journals, etc.</h4>
                                                                                <div class="text-md-right">
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Strongly Agree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Agree
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Disagree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Strongly Disgree
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="primary"></div>
                                                                                <h4 class="m-t-5">30. Textbook(s) and/or other resources were provided to complement lectures</h4>
                                                                                <div class="text-md-right">
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Strongly Agree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Agree
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Disagree 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> Strongly Disgree
                                                                                </div>
                                                                            </li>

                                                                             <li>
                                                                                <div class=" primary"></div>
                                                                                <h4 class="m-t-5">31. Modern teaching aids such as Projectors and other Multi-Media devices were used</h4>
                                                                                <div class="text-md-right">
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Yes 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> No
                                                                                </div>
                                                                            </li>
                                                                           <li>
                                                                                <div class=" primary"></div>
                                                                                <h4 class="m-t-5">23. The Lecturer clearly presented ideas and concepts of topics</h4>
                                                                                <div class="text-md-right">
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Yes 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> No
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class=" primary"></div>
                                                                                <h4 class="m-t-5">24. The Lecturer encouraged critical thinking</h4>
                                                                                <div class="text-md-right">
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Yes 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> No
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="primary"></div>
                                                                                <h4 class="m-t-5">25. The Lecturer delivered at an appropriate pace/speed</h4>
                                                                                <div class="text-md-right">
                                                                                    <input type="radio" class="radio-but" value="Full-Time"> Yes 
                                                                                    <input type="radio" class="radio-but" value="Part-Time"> No
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="primary"></div>
                                                                                <h4 class="m-t-5">35. How satisfied are you with teaching and learning of this course?</h4>
                                                                                <div class="">
                                                                                    <input type="radio" class="radio-but" Group="me" value="Full-Time"> Completely satisfied  
                                                                                    <input type="radio" class="radio-but" Group="me" value="Part-Time"> Very satisfied
                                                                                    <input type="radio" class="radio-but" Group="me" value="Full-Time"> Moderately satisfied 
                                                                                    <input type="radio" class="radio-but" Group="me" value="Part-Time"> Very dissatisfied
                                                                                    <input type="radio" class="radio-but" Group="me" value="Part-Time"> Completely dissatisfied

                                                                                </div>
                                                                            </li>

                                                                             <li>
                                                                                <div class=" primary"></div>
                                                                                <h4 class="m-t-5">37. Lecturer’s strength(s): </h4>
                                                                                <div class="">
                                                                                    <textarea name="" id="" cols="174" rows="10"></textarea> 
                                                                                </div>
                                                                            </li>
                                                                           <li>
                                                                                <div class=" primary"></div>
                                                                                <h4 class="m-t-5">38. Areas lecturer needs to improve or work on: </h4>
                                                                                <div class="">
                                                                                    <textarea name="" id="" cols="174" rows="10"></textarea> 
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class=" primary"></div>
                                                                                <h4 class="m-t-5">39. Please state any other comment(s)/suggestion(s): </h4>
                                                                                <div class="">
                                                                                    <textarea name="" id="" cols="174" rows="10"></textarea> 
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