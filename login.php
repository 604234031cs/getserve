<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
header("Content-type:application/json",true);
include('configdata.php');


$contendata = file_get_contents("php://input");
$getdata = json_decode($contendata);

$user = $getdata->user;
$pass = md5($getdata->pass);


$sql = "SELECT * FROM member WHERE member_username ='$user' AND member_password = '$pass'";
$result = mysqli_query($con,$sql);
$numrow = mysqli_num_rows($result);

if($numrow == 1){
    $arr = array();
    while($row = mysqli_fetch_assoc($result)){
        $arr[] =$row;
    }
    echo json_encode($arr);
    mysqli_close($con);
}else{
    echo json_encode("NULL");
}

?>