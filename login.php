<?php
include("connect.php");

if(isset($_GET['error'])){
    echo "<h1 class='bg-red-500 text-white text-center text-3xl p-4 rounded-md'>You already have an acuont</h1>";
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $dastor = " SELECT * FROM users where email = '$email' and pwd = '$password'";
    if( $connect->query($dastor)->num_rows >0){
         session_start();
         $result = $connect->query($dastor);
    
        //  $_SESSION['user'] = $user;
        while($row= $result->fetch_assoc()){
            $_SESSION['user_id'] =$row['id']; 
        }
         header("location:home.php");
    }
    else{
        echo "<h1>invalid email or password </h1>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title> 
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
    <div class="w-full flex flex-col mt-11 justify-center items-center overflow-scroll">
        <form action=<?php echo $_SERVER["PHP_SELF"] ?> method="post" class="w-[50%] h-fit my-6 rounded-md shadow-[3px_4px_30px_rgba(0,0,0,0.3)] p-4 flex flex-col items-center">
        <h1 class="font-bold text-3xl font-sans my-4">Login</h1>
    <input name="email" class="py-2 px-2 rounded-md w-full border my-2 focus:outline-blue-400" type="text" placeholder="Email">
    <input name="password" class="py-2 px-2 rounded-md w-full border my-2 focus:outline-blue-400" type="text" placeholder="Password">
    <button class="py-2 px-5 text-white rounded-md space-x-7 bg-blue-500 " type="submit">Login</button>
    <h1 class="my-2 text-xl">Don't have an account <a class="underline text-blue-500" href="signup.php">create one</a></h1>
    <button class="py-2 px-5  bg-transparent rounded-md border hover:cursor-pointer">
        ▶Sign in with Google 
    </button>
    </form>
    </div>
</body>
</html>