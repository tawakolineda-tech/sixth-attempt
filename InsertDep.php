<?php
include("connection.php");
if(isset($_POST["Department"])){
    $newdepName = $_POST["Department"];
    $allDep = "SELECT dep_name FROM department where dep_name='$newdepName'";
    $result = $connect->query($allDep);
   if($result->num_rows>0){
    echo "<script>alert('Sorry This department already exist')</script>";
   
   }
   else{
    $connect->query("INSERT INTO  department(dep_name) values('$newdepName')");
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
           <a href="insertstudent.php"><h1>Student</h1> </a>
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
            <h1>Home
            <i>›</i>
            Insert Department
            </h1>
</div> 
    <div class="w-full  items-center flex gap-5 p-5 h-screen  flex-col">
        <h1 class="text-3xl font-bold text-center mb-4">Add Department</h1>
          <form class="p-11 w-[60%] h-[30%] border flex items-center  rounded-2xl  flex-col gap-5" action=<?php echo $_SERVER["PHP_SELF"]?> method="post">
            <input name = "Department" type="text" placeholder="please enter department name" class="w-[60%] border outline-0 my-22 h-[30%]">
            <input type="submit" value="save" class="px-5 h-[22%] bg-orange-300 text-white w-[20%] rounded-xl">
          </form>
          </div>
           </div>
   </div>
   </section>
   </div>
   
</body>
</html> 