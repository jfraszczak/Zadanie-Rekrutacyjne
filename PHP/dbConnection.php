<?php
    function OpenCon(){
        $dbServerName = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "e-msi";
        $conn = mysqli_connect($dbServerName, $dbUser, $dbPassword, $dbName);
        
        return $conn;
    }
    
    function CloseCon($conn){
        $conn -> close();
    }
?>