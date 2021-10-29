<?php
declare(strict_types = 1);
include 'autoload.inc.php';

if(isset($_POST['btnSendMessageAll'])){
    $Message = $_POST["txtMessageAll"];
    $SearchEmail = $_POST["txtSearchEmail1"];//THIS IS FOR SEACHING EMAILS

    if($AccademicYear !="" || $Semister !="" || $StartTime !="" || $EndTime !=""){
        $sql = "INSERT INTO `massages_logs`(`Message_ID`, `Lecturer_id`, `Lecturer_Email`, `Messages`) VALUES ('$LecturerID','$LecturerEmail')";
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

if(isset($_POST['btnSetDefault'])){

    
}