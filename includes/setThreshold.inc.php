<?php
declare(strict_types = 1);
include 'autoload.inc.php';

if(isset($_POST['btnCreateThreshold'])){
  $AccademicYear = $_POST["txtAccademicYear2"];
  $Semister = $_POST["cmbSemister2"];
  $Threshold = $_POST["txtThreshold"];
  $NumOfQuestions = $_POST["txtNumOfQuestions"];
  
    if($AccademicYear !="" || $Semister !="" || $Threshold !="" || $NumOfQuestions !=""){
      
      $sql = "INSERT INTO `dblogin`(`username`, `password`, `utype`) VALUES ('$AccademicYear','$Semister','$Threshold')";
      $inserts = new inserting($sql);
      try {
        $inserts->commands();
        echo '<script>alert("Apprasal Period Inserted")</script>';
        header("Location: ../pages/Admin-Pages/Admin-Setting.php");
        
      } catch (Exception $e) {
        echo "Error: ". $e->getMessage();
      }
    }
}
  