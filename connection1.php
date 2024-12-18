
<?php

$server_name = 'localhost';
$user_name = 'root';
$password = '';
$database = 'signup';

$connection = new mysqli($server_name , $user_name , $password, $database);

if($connection->connect_error){
    die("Error");
}

    
    $check_in = $_POST['cid'];
    $check_out = $_POST['cod'];
    $num = $_POST['num'];
    $room_type = $_POST['text'];

    $sql = "Insert into room_booking(check_in_date,check_out_date,no_of_adults,room_type) values(?,?,?,?)";
    $statment = $connection->prepare($sql);

    $statment->bind_param("ssss", $check_in,$check_out,$num,$room_type);

    if($statment->execute()){
        header("Location: http://localhost/New%20folder/home.php");
        
    }else{
        echo 'Error!';
    }
    
?>
