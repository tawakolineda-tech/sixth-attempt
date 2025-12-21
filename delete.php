<?php
include "connection.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    echo $id;
    $dastor = "DELETE FROM product WHERE id=".$id;
    if($connection->query($dastor)===true){
      header("location:read.php?message=success");
    }else{
        header ("location:read.php?message=fail");
    }

}
?>