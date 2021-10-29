<?php
declare(strict_types = 1);
include 'autoload.inc.php';

if(isset($_POST['btnAddEmail'])){
    $LecturerID = $_POST["txtLecturerID"];
    $LecturerEmail = $_POST["txtLecturerEmail1"];
    $SearchEmail = $_POST["txtSearchEmail2"];

    if($AccademicYear !="" || $Semister !="" || $StartTime !="" || $EndTime !=""){
        $sql = "INSERT INTO `email`(`Lecturer_ID`, `Lecturer_Email`) VALUES ('$LecturerID','$LecturerEmail')";
        $inserts = new inserting($sql);
        try {
          $inserts->commands();
          echo '<script>alert("Email Added Inserted")</script>';
          header("Location: ../pages/Admin-Pages/Admin-Setting.php");
          
        } catch (Exception $e) {
          echo "Error: ". $e->getMessage();
        }
      }
    
}