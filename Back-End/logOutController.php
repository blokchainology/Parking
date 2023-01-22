<?php

$NameServer = "localhost";
$UserName = "root";
$Password = "";
$DataBase = "zmat1124";

$conn = mysqli_connect($NameServer, $UserName, $Password, $DataBase);

if ($conn) {
    $pass = $_POST['pass'];
    $plack = $_POST['plack'];
    $timeKHOROG = $_POST['timeKHOROG'];

    $qoury1 = "SELECT * FROM `parking1` WHERE plack = '$plack' AND pass = '$pass'";
    $result1 = mysqli_query($conn , $qoury1);
    
    if(mysqli_num_rows($result1) > 0 ){
        $qoury2 = "UPDATE `parking1` SET `timeKHOROG`='$timeKHOROG' WHERE plack = '$plack'";
        $result2 = mysqli_query($conn , $qoury2);

        if($result2){
            header("location: index.php?info=ture");
        }else {
            header("location: index.php?info=false");
        }
    }else { 
        echo "اشتباه هست";
    }
};