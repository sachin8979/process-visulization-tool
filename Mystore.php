<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminhome.php</title>
    <!-- <link rel="stylesheet" href="path/to/output.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<?php
    session_start();
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    if(!isset($_SESSION['admin'] )){
        header("location:form/login.php");
        exit();
    }

?>
<body>
    <nav class="w-full h-20 bg-black">
        <div class="flex justify-between items-center">
            <div class="lg:pl-4 lg:pt-3 ">
                <h1 class="text-white font-bold lg:text-4xl md:text-3xl ">My Store</h1>
            </div>
            <div class="flex pr-4 pt-3">
            <div>
                <i class="fa-solid fa-user text-white inline-block"></i>
                <h1 class="text-white inline-block">Hello,<p class="inline-block"><?php echo $_SESSION['admin'];?> | </p></h1>
            </div>
            <div>
                <i class="fa-solid fa-right-from-bracket inline-block text-white"></i>
                <a href="form/logout.php" class="text-white">Logout |</a>
            </div>
            <div>
               <a href="" class="text-white">UserPanel</a>
            </div>
            </div>
        </div>
    </nav>

    <div class="text-3xl text-center font-medium">Dashboard</div>
    <div class=" lg:ml-[30%] md:ml-[0]">
    <div class="bg-orange-500 lg:w-[60%] md:w-fit h-10 flex justify-evenly">
        <a href="product/index.php" class="text-white text-2xl font-bold">Add Post</a>
        <a href="../user/header.php" class="text-white text-2xl font-bold">Users</a>
    </div>
</div>
                


    
    <script src="https://kit.fontawesome.com/cd899bf2d5.js" crossorigin="anonymous"></script>
</body>
</html>
