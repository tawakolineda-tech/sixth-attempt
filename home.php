<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("location:login.php"); 
    exit(); 
}
include("connect.php");
$userID = $_SESSION['user_id'];
$dastor = " SELECT * FROM post";

$gettingPost = $connect->query($dastor);
$gettingUser = "SELECT * from users where id =".$userID;
$result = $connect->query($gettingUser);
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
   <nav class="w-full flex justify-between items-center bg-red-800 text-black text-2xl p-4">
     Hello,
     <?php
     while($row = $result->fetch_assoc()){
      echo $row['name']. " ".$row['lastname'];
     }
     ?>
     <button class="bg-white py-1 px-4 rounded-md text-black">
      <a href="<?php echo "uploeadPost.php?id".$userID?> ">uploead a post</a></button>
   </nav>
   <?php
   if($gettingPost->num_rows==0){
   ?>
   <h1 class="text-center text-2xl">no post availble</h1>
   <?php
   }else{ while($gettingPost->fetch_assoc()){ ?>
   <div class="w-full flex justify-between gap-3 text-center flex-wrap">
   <div class="p-4 rounded-lg w-[30%] shadow-xl h-fit border">
    <img class="rouneded-lg" src="<?php echo "/images/". $row['imgURL']?>" alt="">
    <p>
       <?php echo $row['post_text']?> 
    </p>
   </div>
   </div>
   <?php }} ?>
</body>
</html>