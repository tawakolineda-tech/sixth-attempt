
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="insert.css">
</head>
<body>
    <form METHOD = "post" action <?php echo $_SERVER["PHP_SELF"] ?> >
        <label for="">Class Name</label>
        <input type="text" name = "class">
        <br>
        <label for="">LastName</label>
        <input type="text" name = "lastname">
        <br>
        <label for="">Instructor</label>
        <input type="text" name = "teacher">
        <br>
        <button>Save</button>
    </form>
    <?php
    include "index.php";
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $ClassName = $_POST["class"];
        $lastName = $_POST["lastname"];
        $Instructor = $_POST["teacher"];

        $sql = "INSERT INTO class(NAME,LASTNAME,INSTRUCTOR)VALUES('$ClassName', '$lastName', '$Instructor')";
        if($connection->query($sql)==true){
            $error = false;
            if(empty($ClassName) || empty($lastName) || empty($Instructor)){
                $error = true;
                echo "<p style='background-color: red;font-size: 18px;text-align: center; margin: 0 auto;width: fit-content; border-radius: 12px; padding:20px;'>
                All inputs should be fill
                </p>";
              
            
            }
            else{ 
                echo "<p  style='background-color: green;font-size: 18px;text-align: center; margin: 0 auto;width: fit-content; border-radius: 12px; padding:20px;'>Data inserted</p>"; 
               } 
            }
    }
    ?>
</body>
</html>