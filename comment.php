<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
include('configdata.php');
$contendata = file_get_contents("php://input");
$getdata = json_decode($contendata);    

$text = $getdata->text;
$roomid = $getdata->idroom;

$sql = "INSERT INTO commentroom(com_id,comment_text,member_id,room_id) 
        VALUES (NULL,'$text',NULL,'$roomid')";
$result = mysqli_query($con,$sql);




?>