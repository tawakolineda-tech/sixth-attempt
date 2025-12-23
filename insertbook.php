<?php
include "connection.php";

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name = $_POST["name"];
    $price = $_POST["price"];
    $commend = "INSERT INTO book(name,price) VALUES ('$name','$price')";
    if($connect->query($commend)===true){
        echo "data inserted";
    }else{
        echo "data not inserted";
    }
}

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
    <form class="w-[40%] mx-auto text-2xl flex flex-col items-center shadow-gray-600 my-11 gap-2.5  justify-center bg-purple-600  rounded-md shadow-2xl p-8 outline-0" action=<?php echo $_SERVER["PHP_SELF"]?>method="post">
        <h1 class="text-3xl mb-3">List Of Books</h1>
        <div>
            <label>Name</label>
            <input name="name" class="border w-full p-2 bg-stone-50 rounded-md" type="text" >
        </div>
        <div> 
            <label>Price</label>
            <input name="price" class="border p-2 w-full bg-stone-50 text-black rounded-md" type="number">
        </div>
        <button class="border p-3 rounded-md px-11 bg-white text-black text-xl hover:bg-amber-200 transition-all duration-500 w-[73%] my-4">Save</button>
    </form>

</body>
</html>