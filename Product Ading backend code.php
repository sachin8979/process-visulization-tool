<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <?php
        include "header.php"
    ?>
</head>
<body class="bg-gray-100">
    <h1 class="font-bold text-center text-3xl text-blue-700 mt-6">Laptop</h1>

    <!-- Grid Container -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
    <?php
        include "config.php";
        $Record = mysqli_query($config , "select * from tblproduct");
        while( $row = mysqli_fetch_array($Record)) {
            $checkpage = $row["pcategory"];
            if($checkpage === "laptop"){
            echo "
            <div class='h-96 w-full bg-white rounded-lg shadow-md flex flex-col items-center p-4 transform transition duration-300 hover:scale-105 hover:shadow-lg'>
                <!-- Image Container -->
                <div class='mt-2'>
                    <img src='../admin/product/$row[image]' class='h-40 w-40 object-contain rounded-md'>
                </div>
                <!-- Product Name -->
                <div class='font-bold text-gray-800 text-xl text-center mt-4'>$row[pname]</div>
                <!-- Product Price -->
                <div class='font-bold text-green-600 text-lg text-center mt-2'>â¹$row[pprice]</div>
                <!-- Quantity and Button -->
                <div class='mt-4 flex flex-col items-center'>
                    <input type='number' name='quantity' placeholder='Quantity' class='h-10 w-40 bg-gray-50 border border-gray-300 rounded-md text-center focus:ring-2 focus:ring-blue-500 focus:outline-none'>
                    <button type='submit' name='cart' class='font-bold bg-blue-600 text-white w-40 h-10 rounded-md mt-4 hover:bg-blue-700 transition duration-300'>Add to Cart</button>
                </div>
            </div>
            ";
            }
        }
    ?>
</div>

    <script src="https://kit.fontawesome.com/cd899bf2d5.js" crossorigin="anonymous"></script>
</body>
</html>
