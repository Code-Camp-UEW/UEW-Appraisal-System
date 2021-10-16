<?php 
include '../dbConn.php';

class inserting{

    private $queries;
    private $conns;

    function __construct(string $querys){
        $this->queries = $querys;
        $this->conns = new dbConn();
    }

    function commands(){
        $conn = $this->conns->connection();
        

        if($conn->query($this->queries) === TRUE){
            echo '<script>alert("Data Inserted")</script>';
        }
        else{
            echo '<script>alert("Error: '.$this->queries.'")</script>';
        }
        
    }

}