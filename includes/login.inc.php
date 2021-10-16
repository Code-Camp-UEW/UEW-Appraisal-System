<?php
declare(strict_types = 1);
include 'autoload.inc.php';

if(isset($_POST['btn_login'])){
  $uName = $_POST["txtUsername"];
  $uPass = $_POST["txtPassword"];

  if($uName !="" || $uPass !=""){
    $Authenticate= new Authentication($uName, $uPass );

    try {
      
      $Authenticate->Login();
    } catch (Exception $e) {
      echo "Error: ". $e->getMessage();
    }
  }

}
