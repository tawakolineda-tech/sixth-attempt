<?php
include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
    <h1 class = "w-full p-4 bg-purple-500 text-white text-center mb-4">PRODECT LIST</h1>
    <?php
    $dastor = "SELECT * FROM product";
   $natija =  $connection->query($dastor);
   if($natija->num_rows >0){
    echo "<table class = 'w-[90%] mx-auto my-11 rounded-md border border-collapse'>";
    echo "<tr class = 'border rounded-md text-center'>";
    echo "<th class = 'border '>ID</th>";
    echo "<th class = 'border '>NAME</th>";
    echo "<th class = 'border '>PRICE</th>";
       echo "<th class = 'border '>Delete</th>";
    echo "</tr>";
    while($radif = $natija->fetch_assoc()){
       echo "<tr class = 'border rounded-md text-center h-fit'>";
       echo "<td class = 'border'>".$radif['id']."</td>";
       echo "<td class = 'border'>".$radif['name']."</td>";
       echo "<td class = 'border'>".$radif['PRICE']."</td>";
       echo "<td><a class = ' bg-red-500  ' href='delete.php?id='".$radif['id'].">Delete</a></td>";
       echo "</tr>";
    }
    echo "</table>";
  }
    if(isset($_GET["message"])){
        if($_GET["message"]==="success"){
          echo "<h1 class = 'absolute top-2 right-3 bg-green-400 text-white p-4'>One item deleted</h1>";
        }else{
          echo "<h1>item could not be deleted</h1>";
        }
      }
   
    
    ?>

</body>
</html>