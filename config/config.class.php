<?php

/**
 *
 */
class config{
  public $dbHost;
  public $dbUser;
  public $dbPass;
  function __construct()
  {
    $this->dbHost = 'localhost:8081';
    $this->dbUser  = 'root';
    $this->dbPass  = '';
  }

  function connect(){
    $conn = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass);
    if(!$conn){
      die('Could not connect:'.mysqli_error());
    }else{
      echo 'connected';
    }
    mysqli_close($conn);

  }
}



 ?>
