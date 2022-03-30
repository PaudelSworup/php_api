<?php 

if(isset($_GET)){

    $con = mysqli_connect("localhost","root","","vehicle");
    $select_query = "select * from cars";
    $response = array();
    
    if($con){
        echo "connected";   
    }else echo "failed to connected"; 
    $raw = mysqli_query($con,$select_query);
    while($res = mysqli_fetch_array($raw)){
        $data [] = $res;
        $response = json_encode(['results' => $data]);    
    }  
    header('Content-Type: application/json');   
    print($response);
}


?>