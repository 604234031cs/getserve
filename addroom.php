<?php

    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: Origin, X-Requested-With,Content-Type,Accept');
 
    include('configdata.php');

    

    $contendata = file_get_contents("php://input");
    $getdata = json_decode($contendata);
    
    $name = $getdata->name;
    $Category = $getdata->Category;
    $facilities = $getdata->facilities;
    $tell = $getdata->tell;
    $type = $getdata->type;
    $address = $getdata->address;   
    $price = $getdata->price;
 

    $sql = "INSERT INTO room(room_id,room_name,category_id,room_facilities,room_tell,room_category,rooms_address,room_price,title_img) 
            VALUES (NULL,'$name','$Category','$facilities','$tell','$type','$address','$price',NULL)";

    $result = mysqli_query($con,$sql);

?>