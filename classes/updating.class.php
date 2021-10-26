<?php 
include '../dbConn.php';

class updating{

    private $queries;
    private $conns;

    function __construct(string $querys){
        $this->queries = $querys;
        $this->conns = new dbConn();
    }

    function commands(){
        $conn = $this->conns->connection();
        
        if($conn->query($this->queries) === TRUE){
            echo '<script>alert("Data Updatad")</script>';
        }
        else{
            echo '<script>alert("Error: ")</script>'. $this->queries;
        }
        
    }
    
}