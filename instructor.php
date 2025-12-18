<?php
include("connection.php");
$query ="SELECT ins.ins_id,ins.ins_name,ins.ins_lastname,ins.phone_num,ins.degree,department.dep_name from instructor as ins INNER JOIN 
instructordepartment as insdep on ins.ins_id = insdep.ins_id INNER JOIN department on insdep.dep_id = department.dep_id";
 $result =$connect->query($query);
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
            <h1>read student</h1>
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
            Insert student
            </h1>
</div> 
    <div class="w-full  items-center flex gap-5 p-5 h-screen  flex-col">
        <h1 class="text-3xl font-bold text-center mb-4">All Student</h1>
       <table class="w-full border border-collapse p-3 text-red-900">
        <tr class="border">
            <th class="border text-center p-2 outline-0">Id</th>
            <th class="border text-center p-2 outline-0">Instructor Name</th>
            <th class="border text-center p-2 outline-0">Instructor LastName</th>
            <th class="border text-center p-2 outline-0">Phone number</th>
            <th class="border text-center p-2 outline-0">degree</th>
            <th class="border text-center p-2 outline-0">Department Name</th>
        </tr>
        <?php
        while($row = $result->fetch_assoc()){?>
        <tr>
            <td class="border text-center text-red-500"><?php echo $row["ins_id"]?></td>
            <td class="border text-center text-red-500"><?php echo $row["ins_name"]?></td>
            <td class="border text-center text-red-500"><?php echo $row["ins_lastname"]?></td>
            <td class="border text-center text-red-500"><?php echo $row["phone_num"]?></td>
            <td class="border text-center text-red-500"><?php echo $row["degree"]?></td>
            <td class="border text-center text-red-500"><?php echo $row["dep_name"]?></td>
        </tr>
        <?php } ?>
       </table>
          </div>
           </div>
   </div>
   </section>
   </div>
   
</body>
</html> 