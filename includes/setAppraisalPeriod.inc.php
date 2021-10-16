<?php
declare(strict_types = 1);
include 'autoload.inc.php';


// this setup the Apprasal Period
if(isset($_POST['btnCeateApprasalPeriod'])){
  $AccademicYear = $_POST["txtAccademicYear1"];
  $Semister = $_POST["cmbSemister1"];
  $StartTime = $_POST["dtStartDate"];
  $EndTime = $_POST["dtEndDate"];
  
  if($AccademicYear !="" || $Semister !="" || $StartTime !="" || $EndTime !=""){
    $sql = "INSERT INTO `dblogin`(`username`, `password`, `utype`) VALUES ('$AccademicYear','$Semister','$StartTime')";
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

if(isset($_POST['btnRemoveApprasalPeriod'])){

}
