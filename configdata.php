<?php
    $host = "localhost";
    $username= "root";
    $password = "";
    $Dbname = "miniproject";
    $con = @mysqli_connect($host,$username,$password,$Dbname);
     mysqli_set_charset($con,'utf8');
   
    // if($con){
    //     echo "OK";

    // }else{
    //     echo "Found";    
    // }
?>