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
    <div class="w-full h-screen flex justify-center items-center ">
   <form class= "w-1/2 p-4 border rounded-md shadow-2xl  shadow-black flex flex-col gap-1.5" method = "post" action=<?php echo $_SERVER["PHP_SELF"]; ?>>
    <h1 class = "text-center">PRODECT ENTRY</h1>
       <input name = "id" class = "py-3 border rounded-md focus:outline-0" placeholder = "ID" type="number">
       <input name = "proName" class = "py-3 border rounded-md focus:outline-0" placeholder = "Name" type="text">
       <input name = "price" class = "py-3 border rounded-md focus:outline-0" placeholder = "PRICE" type="number">
       <button class= "px-5 py-2 margin-20px auto  bg-green-500 text-white rounded-md hover:bg-blue-500 transition-all duration-700">Save</button>
       </form> 
       </div>
       <?php
       if($_SERVER["REQUEST_METHOD"]==="POST"){
        $id = $_POST["id"];
        $name = $_POST["proName"];
        $price = $_POST["price"];

        $dastor = "INSERT INTO product(id,name,PRICE)VALUES('$id','$name','$price')";
       if( $connection->query($dastor)===true){
        echo "<h1>
        data inserted
        </h1>";
       }else{
        echo "<h1>Data not inserted</h1>";
       }
       }
       
       ?>
</body>
</html>