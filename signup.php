<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

include('configdata.php');

$contendata = file_get_contents("php://input");
$getdata = json_decode($contendata);

$name = $getdata->name;
$sname = $getdata->sname;
$email = $getdata->email;
$username = $getdata->username;
$password = md5($getdata->password);


$sql = "INSERT INTO member(member_name,member_sname,member_email,member_username,member_password) 
        VALUES ('$name','$sname','$email','$username','$password')";
$result = mysqli_query($con,$sql);

?>