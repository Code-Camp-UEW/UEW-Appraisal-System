<?php
include '../dbConn.php';
class Authentication{
private $username;
private $password;
private $conns;

function __construct(string $uName, string $uPass){
  $this->username = $uName;
  $this->password = $uPass;
  $this->conns = new dbConn();
}

//getters
public function getUsername(){
  return $this->username;
}

//setters
public function setUsername($username){
  $this->username = $username;
}

function Login(){

  $conn = $this->conns->connection();

  $sql_query = "SELECT utype as cntUser FROM dblogin where username='".$this->username."' and password='".$this->password."'";
  $result = mysqli_query($conn, $sql_query);
  $row = mysqli_fetch_array($result);

  $count = $row['cntUser'];
  echo $count;
  if(is_array($row)){
    session_start();
    $_SESSION['uname'] = $this->username;
    if($count == "admin"){
      header("Location: ../pages/Admin-Pages/Admin-Header.php");
    }
    if($count == "teacher"){

    }
    if($count == "student"){
      header("Location: ../pages/Student-Pages/Student-Appraises.php");
    }
  }else {
    header("Location: ../index.php");
    //echo "string";
  }
}

}

?>