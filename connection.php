<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "library";
$connect = new mysqli($serverName,$userName,$password,$dbName);
if($connect->connect_error){
    echo "not connected";
}
else{
    echo "connected succufully";
}
?>