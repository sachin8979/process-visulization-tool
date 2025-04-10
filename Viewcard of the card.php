<?php
// Start the session at the very beginning of the file
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewCart</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="">
    <?php
    include "header.php"
    ?>
    <div>
    <p class="text-center mt-1 font-bold text-3xl text-blue-800 bg-gray-100 py-4 rounded-md shadow-md">
        My Cart
    </p>
</div>
<div class="overflow-x-auto mt-6 px-4">
    <table class="min-w-half bg-white border border-gray-300 rounded-lg shadow-md">
        <thead class="bg-blue-600 text-white">
            <tr>
                <th class="px-4 py-2 border">Index No.</th>
                <th class="px-4 py-2 border">Product Name</th>
                <th class="px-4 py-2 border">Product Price</th>
                <th class="px-4 py-2 border">Product Quantity</th>
                <th class="px-4 py-2 border">Total Price</th>
                <th class="px-4 py-2 border">Update</th>
                <th class="px-4 py-2 border">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Example data for demonstration
            $total = 0;
            if(isset($_SESSION['cart'])){
                foreach($_SESSION['cart'] as $key=> $value){
                    $total = $value['productQty']*$value['productPrice'];
                    echo "
                    <form action='insertcart.php' method=''POST>
                    <tr>
                        <td class='px-4 py-2 border text-center'> $key</td>
                        <td class='px-4 py-2 border text-center'>$value[productName]</td>
                        <td class='px-4 py-2 border text-center'>$value[productPrice]</td>
                        <td class='px-4 py-2 border text-center'>$value[productQty]</td>
                        <td class='px-4 py-2 border text-center'>$total</td>
                        <td class='px-4 py-2 border text-center'><button name='update' class='bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition duration-300'>Update</button></td>
                        <td class='px-4 py-2 border text-center'><button name='remove' class='bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition duration-300'>Delete</button></td>
                        <td><input type='text' name='item' value='$value[productName]'></td>
                    </tr>
                    </form>
                    ";
                    
                }
            }

            
            
            ?>
        </tbody>
    </table>
</div>



<script src="https://kit.fontawesome.com/cd899bf2d5.js" crossorigin="anonymous"></script>
</body>
</html>
