<?php
declare(strict_types = 1);
include 'autoload.inc.php';

if(isset($_POST['btnAdduser'])){
  $Username = $_POST["txtUsername"];
  $password = $_POST["txtPassword"];
  $userType = "admin";
 
    if($Username !="" || $password !=""){
      
      $sql = "INSERT INTO `dblogin`(`username`, `password`, `utype`) VALUES ('$Username','$password','$userType')";
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
  