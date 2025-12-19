<?php
session_start();
if(isset($_GET["id"])){
$_SESSION['user_ID'] = $_GET["id"];
}
include ("connect.php");
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $message =$_POST['message'];
        $user_id = $_SESSION['user_id']; 
        $image = $_FILES["picture"]["name"];
        $tmp_name = $_FILES["picture"]["tmp_name"];
        $folder = "./images/".$image;
            $dastor = "INSERT INTO post(post_text,imgURL,user_id) VALUES('$message','$image','$user_id')";
            $connect->query($dastor);

             if(move_uploaded_file($tmp_name,$folder)===true){
                header("location:home.php");
             }else{
                header("location:home.php");
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
    <div class="w-full flex justify-center items-center h-screen">
    <form class="border p-4 rounded-md shadow-2xs w-[50%] h-fit" action=<?php echo $_SERVER["PHP_SELF"] ?> method="post" enctype ="multipart/form-date">
        <textarea name="message" placeholder="what is in your mind?" class="py-2 px-4 border w-full h-40" name="" id=""></textarea>
        <input name="picture" class="file:border file:py-2 file:px-4 hover:file:bg-blue-400 hover:file:text-white transition-all duration-700 file:rounded-md" type="file">
        <button class="py-2 px-8 bg-blue-400 text-white rounded-md block my-3 ">Post</button>
    </form>
    </div>
</body>
</html>