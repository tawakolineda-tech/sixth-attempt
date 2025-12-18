<?php
include("connection.php");
if(isset($_POST["coursename"])){
  $courseName =$_POST["courseName"];
  $courseFees = $_POST["coursefees"];
  $courseDepId = $_POST["dep_id"];
 $allcourse = "SELECT course_name,fees, FROM course WHERE course_name='$courseName' AND fees ='$courseFees'";
 $result = $connect->query($allcourse);
 if($result->num_rows>0){
    echo"<script>alert('Sorry this information course already exsits')</script>";
 }
 else{
    $connect->query("INSERT INTO course(course_name,fees,dep_id) values ('$courseName','$courseFees','$courseDepId')");
    echo "date inserted";
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/dashboard.css">
    <link rel="stylesheet" href="../public/output.css">
</head>
<body>
    <div class="bg-stone-50 w-full min-h-screen gap-11">

   <section class="parent">

   <div class="aside">
    <div class="header">
        <img src="../src/img/nav.jpg" alt="">
        <h1>AKKHOR</h1>
        <i class="fa-solid fa-bars-taggered">≡</i>
    </div>
    <div class="items">
        <i>௹</i>
        <div class="items-content">
            <a href="dash.php"><h1>Dashboard</h1></a>
            <i style="font-size:50px;">›</i>
        </div>
    </div>
    <div class="items">
        <i>௹</i>
        <div class="items-content">
           <a href="InsertDep.php"><h1>Department</h1></a>
            <i style="font-size:50px;">›</i>
        </div>
    </div>
    <div class="items">
        <i>௹</i>
        <div class="items-content">
           <a href="insertInstructor.php"><h1>Instructor</h1></a> 
            <i style="font-size:50px;">›</i>
        </div>
    </div>
    <div class="items">
        <i>௹</i>
        <div class="items-content">
            <a href="insertstudent.php"><h1>Student</h1></a>
            <i style="font-size:50px;">›</i>
        </div>
    </div>

    <div class="items">
        <i>௹</i>
        <div class="items-content">
            <a href="insertcourse.php"><h1>Course</h1></a>
            <i style="font-size:50px;">›</i>
        </div>
    </div>
    <div class="items">
        <i>௹</i>
        <div class="items-content">
            <h1>Accontunt</h1>
            <i style="font-size:50px;">›</i>
        </div>
    </div>
    <div class="items">
        <i>௹</i>
        <div class="items-content">
            <h1>Class</h1>
            <i style="font-size:50px;">›</i>
        </div>
    
    </div> 
   
           </div>
           <div class="section">
            <div>
        <nav class="flex items-center shadow-2xl flex-row w-full border mt-4 p-4 justify-between">
        <i>🔎</i>
        <h1>Search</h1>
        <img src="./src/image/b1.jpg" alt="">
        <i>⨌</i>
    </nav> 
           <div class="p-4 ">
            <h1 class="text-3xl">Admin dashboard</h1>
           </div> 
           <div class="flex items-center space-x-4 px-4 text-3xl gap-2">
            <h1><a href="dash.php">Home</a>
            <i>›</i>
            Insert Course
            </h1>
</div> 
    <div class="w-full  items-center flex gap-5 p-5 h-screen  flex-col">
        <h1 class="text-3xl font-bold text-center mb-4">Add Student</h1>
          <form class="p-11 w-[70%] h-[65%] border flex items-center  rounded-xl  flex-col gap-5 shadow-2xl" action=<?php echo $_SERVER["PHP_SELF"]?> method="post">
            <input name = "courseName" type="text" placeholder="please enter course name" class="w-[60%] border outline-0 my-5 h-[13%]">
            <input name = "coursefees" type="text" placeholder="please enter course fees" class="w-[60%] border outline-0 my-5 h-[13%]">
            <input name = "dep_id" type="text" placeholder="please enter course department id" class="w-[60%] border outline-0 my-5 h-[13%]">
            <input type="submit" value="save" class="px-5 h-[13%] bg-orange-300 text-white w-[20%] rounded-xl">
          </form>
          </div>
           </div>
   </div>
   </section>
   </div>
   
</body>
</html> 