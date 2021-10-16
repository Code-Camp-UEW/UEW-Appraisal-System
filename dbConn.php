<?php
class dbConn
{
  private $url = "localhost";
  private $username = "root";
  private $password = "";
  private $database;
  function __construct()
  {
    session_start();
    // $password = "1234";
    $this->database = "uew";

  }

  function connection(){
    $conn = mysqli_connect($this->url, $this->username, $this->password, $this->database);

    if(!$conn){
      die("could not connect");
    }else {
      //echo "connected";
    }
    return $conn;
  }
}
?>
