 <?php
include "index.php";
$sql = "CREATE TABLE class(ID INT AUTO_INCREMENT PRIMARY KEY,NAME VARCHAR(36), INSTRUCTOR VARCHAR(36))";
$connection->query($sql);
?>