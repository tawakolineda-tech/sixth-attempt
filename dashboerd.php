<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="dash.js" defer></script>
    <link rel="stylesheet" href="../public/output.css">
</head> 
<body >
<nav class=" bg-black flex flex-row justify-between p-2 px-11">
            <h1 class="text-white flex p-4 gap-6 text-3xl"><i class="text-green-800">⁂</i>envate <p class="">market</p></h1>
            <button class="bg-green-300 text-white rounded-md px-7">buy now</button>
        </nav>
    <div  class=" bg-stone-50 w-full grid md:grid-cols-3 grid-cols-1">
        <div id="nav" class=" md:col-span-1 gap-3 flex flex-col bg-blue-900">
            <div class="bg-amber-400 h-20 items-center p-4 text-white flex justify-between ">
            <p class="text-3xl">⁂</p>
            <p class="text-3xl">AKKHOR</p>
            <i id="bars" class="text-5xl">Ξ</i>
            </div>
           
            <div class=" flex flex-col text-3xl gap-2 jutify-between items-center">
                <div class=" flex flex-row p-5 bg-blue-800 w-full justify-between rounded-md">
                    <i class="text-amber-400">©</i>
                    <p class="text-blue-200">Dashboard</p>
                    <i class="text-4xl text-blue-200">›</i>
              </div>
              <div class=" flex flex-row p-5 bg-blue-800 w-full justify-between rounded-md">
                    <i class="text-amber-400">⨌</i>
                    <p class="text-blue-200">Student</p>
                    <i class="text-4xl text-blue-200">›</i>
              </div>
              <div class=" flex flex-row p-5 bg-blue-800 w-full justify-between rounded-md">
                    <i class="text-amber-400">₸</i>
                    <p class="text-blue-200">Teachers</p>
                    <i class="text-4xl text-blue-200">›</i>
              </div>
              <div class=" flex flex-row p-5 bg-blue-800 w-full justify-between rounded-md">
                    <i class="text-amber-400">⨘</i>
                    <p class="text-blue-200">Parents</p>
                    <i class="text-4xl text-blue-200">›</i>
              </div>
              <div class=" flex flex-row p-5 bg-blue-800 w-full justify-between rounded-md">
                    <i class="text-amber-400">⩨</i>
                    <p class="text-blue-200">Library</p>
                    <i class="text-4xl text-blue-200">›</i>
              </div>
              <div class=" flex flex-row p-5 bg-blue-800 w-full justify-between rounded-md">
                    <i class="text-amber-400">∰</i>
                    <p class="text-blue-200">classroom</p>
                    <i class="text-4xl text-blue-200">›</i>
              </div>
           </div>
        </div>
        <div class="md:col-span-2  flex text-3xl  bg-stone-50 text-black flex-col  ">
            <div class="bg-white flex flex-row px-22 items-center justify-between h-20">
                <h1 class="">Steven Zone</h1>
                <img class="w-22 h-16 rounded-4xl" src="./img/b.jpg" alt="">
                <i>✉️</i>
                <i>⩍</i>
                <select name="" id="">
                    <option value="">EN</option>
                    <option value="">persion</option>
                    <option value="">French</option>

                </select>
            </div>
            <div class="flex px-11 flex-col text-3xl gap-2 jutify-between items-start mt-11">
                <h1>Admin Dashboard</h1>
                <div class="flex flex-row gap-3">
                    <a href="home.php">Home</a>
                    <i>›</i>
                    <a class="text-amber-400" href="admin.php">Admin</a>
                </div>
                </div>
                <div class="flex flex-row  gap-x-11  mt-18 mx-auto">
                    <div class="flex flex-row justify-between bg-white h-40 p-4">
                        <img class="w-45 h-30  rounded-[50%]" src="./img/b1.jpg" alt="">
                        <div class="flex-col pr-6 py-4">
                        <h1 class="text-stone-300">student</h1>
                        <h1>150000</h1>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between  bg-white h-40  p-4">
                        <img class="w-45 h-30  rounded-[50%]" src="./img/b2.jpg" alt="">
                        <div class="flex-col pr-6 py-4">
                        <h1 class="text-stone-300">Teachers</h1>
                        <h1>2250</h1>
                        </div>
                    </div>
                    </div>
                    <div class="flex flex-row  gap-x-11  mt-18 mx-auto">
                    <div class="flex flex-row justify-between bg-white h-40 p-4">
                        <img class="w-45 h-30  rounded-[50%]" src="./img/b3.jpg" alt="">
                        <div class="flex-col pr-6 py-4">
                        <h1 class="text-stone-300">Parent</h1>
                        <h1>14000</h1>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between  bg-white h-40  p-4 gap-5">
                        <img class="w-45 h-30  rounded-[50%]" src="./img/b4.jpg" alt="">
                        <div class="flex-col pr-6 py-4 ">
                        <h1 class="text-stone-300 ">Library</h1>
                        <h1>13000</h1>
                        </div>
                    </div>
                    </div>
            </div>
            
        </div>
       
    </div>
    <div id="time" class="w-[8%] hidden flex-col text-3xl bg-blue-900  text-amber-400 items-center gap-5">
                <i class="bg-amber-400 text-3xl px-10  py-4 text-white text-center">✕</i>
                <i>∰</i>
                <i>©</i>
                <i>⨌</i>
                <i>₱</i>
                <i>⨘</i>
                <i>⨌</i>
            </div>
</body>
</html>