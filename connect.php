<?php
$connect = new mysqli("localhost" , "root" , "" , "social"); 
if($connect->connect_error){
die ("Connection failed:" .$connect->connect_error);
}
?>