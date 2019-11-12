<?php
  
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
include('configdata.php');
$contendata = file_get_contents("php://input");
$getdata = json_decode($contendata);    

$score = $getdata->score;
$roomid = $getdata->idroom;

$sql = "INSERT INTO scoreroom(score_id,room_id,member_id,score_room) 
        VALUES (NULL,'$roomid',NULL,'$score')";
$result = mysqli_query($con,$sql);


?>