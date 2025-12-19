<?php
include("connect.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password1=$_POST['password1'];
    $password2=$_POST['password2'];
    if($password1 === $password2){
     $dastor = "INSERT INTO users (name, lastName,email,pwd) VALUES ('$name','$lastname','$email','$password1')";
     $query = "SELECT * FROM users where email = '$email'";
     if($connect->query($query)->num_rows >0){
        header("location:login.php?error=error");
     }else{
     if( $connect->query($dastor)=== true){
        header("location:login.php");
     } else{
       echo "<script>alert('Error: ".$connect->error ."');</script>"; 
     } 
    }}
    else{
        echo "<script>alert('Passwords do not match!');</script>";
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
    <div class="w-full flex justify-center items-center  overflow-scroll">
        <div class="w-[90%] h-fit my-3  rounded-md shadow-[3px_4px_30px_rgba(0,0,0,0.3)] p-4 ">
            <h1 class="text-center font-mono font-bold text-3xl">SIGN UP</h1>
            <div class="grid grid-cols-2 gap-4">
            <form action=<?php echo $_SERVER["PHP_SELF"]?> method="post" class="w-full flex items-center flex-col">
                <input name="name" class="py-2 px-2 rounded-md w-full border my-2 focus:outline-blue-400" type="text" placeholder="Name">
                <input name="lastname" class="py-2 px-2 rounded-md w-full border my-2 focus:outline-blue-400" type="text" placeholder="LastName">
                <input name="email" class="py-2 px-2 rounded-md w-full border my-2 focus:outline-blue-400" type="email" placeholder="Email">
                <input name="password1" class="py-2 px-2 rounded-md w-full border my-2 focus:outline-blue-400" type="password" placeholder="Password">
                <input name="password2" class="py-2 px-2 rounded-md w-full border my-2 focus:outline-blue-400" type="password" placeholder="Confirm password">
                <button class="py-3 px-4 text-white rounded-md space-x-7 bg-blue-400 " type="submit">SIGN UP</button>
            </form>
            <div>
                <img src="./images/bb.jpg" class="w-full bg-cover h-[80%]" alt="">
            </div>
        </div>
        </div>
    </div>
</body>
</html>