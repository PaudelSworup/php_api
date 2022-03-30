<?php


if(isset($_POST)){

    $name = $_POST['name'];
    $image = $_POST['pic'];
    $detail = $_POST['detail'];

    $filename = "IMG".rand().".jpg";
    file_put_contents("images/".$filename,base64_decode($image));
    file_put_contents("C:/Users/dell/AndroidStudioProjects/VehicleRental/app/Images/".$filename,base64_decode($image));
    
    $con = mysqli_connect("localhost","root","","vehicle");
    
    if($con){
        echo "connected"; 
        $insert = "insert into cars(name,image,car_detail) values('$name','$filename','$detail')";
        mysqli_query($con,$insert);

        // $select_query = "select * from cars";
        // $raw = mysqli_query($con,$select_query);
        // while($res = mysqli_fetch_array($raw)){
        //     $data [] = $res;
           
        // }  
    }

}


// header('Content-Type: application/json');   
// print(json_encode($r));
// $response = json_encode(['results' => $data]); 









?>