<?php
include("connection.php");
$getTotalSt = "select * from student";
$totalSt = $connect->query($getTotalSt);
$getIns = "select * from instructor";
$totalIns = $connect->query($getIns);


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
<!-- <nav class="flex items-center flex-row w-[70%]">
        <i>🔎</i>
        <h1>Search</h1>
        <img src="./src/image/b1.jpg" alt="">
        <i>⨌</i>
    </nav> -->
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
            <h1>Dashboard</h1>
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
            <h1>Library</h1>
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
           <div class="px-auto">
            <h1 class="text-3xl">Admin dashboard</h1>
           </div> 
           <div class="flex items-center space-x-4 px-4 text-3xl">
            <h1>Home
            <i>›</i>
            Admin
            </h1>
           </div>

           <div class="flex gap-2 justify-between p-4">
            <div class="flex-1 flex justify-center items-center flex-col bg-white shadow-2xl h-20">
                <h1>Total student</h1>
                <h1>
                   <?php
                 echo $totalSt->num_rows;
                   ?>
                </h1>
            </div>
            <div class="flex-1 flex flex-col justify-center items-center bg-white shadow-2xl h-20">
                <h1>Total instructor</h1>
                <h1>
                    <?php
                    echo $totalIns->num_rows;
                    ?>
                </h1>
            </div>
           </div>
           <div class="flex gap-2 justify-between p-4 py-4  items-center">
            <div class="flex-1 flex justify-center items-center flex-col bg-white shadow-2xl h-20">
                <h1>Revenue</h1>
                <h1>
                  0
                </h1>
            </div>
            <div class="flex-1 flex flex-col justify-center items-center bg-white shadow-2xl h-20">
                <h1>Loans</h1>
                <h1>
                0
                </h1>
            </div>
           </div>
           </div>
   </div>
   </section>
   </div>
   
</body>
</html>