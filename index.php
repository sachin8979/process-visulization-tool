<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <?php
    session_start();
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    if(!isset($_SESSION['admin'] )){
        header("location:../form/login.php");
        exit();
    }

?>
</head>
<body class=" min-h-screen  bg-white">
    <div class="bg-slate-100 flex justify-center mt-3">
    <div class="w-full max-w-lg p-6 rounded-lg shadow-md h-130 ">
        <h2 class="text-center text-3xl font-bold underline mb-6">Product Detail</h2>
        <form action="insert.php" method="post" enctype="multipart/form-data" class="space-y-6">
            <!-- Product Name -->
            <div>
                <label for="name" class="block text-md font-medium text-gray-700">Product Name</label>
                <input 
                    type="text" 
                    name="pdname" 
                    id="name" 
                    required 
                    class="w-full h-10 rounded-md px-4 border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                    placeholder="Enter Product Name" 
                    aria-label="Product Name">
            </div>

            <!-- Product Price -->
            <div>
                <label for="number" class="block text-md font-medium text-gray-700">Enter Price</label>
                <input 
                    type="number" 
                    name="pdprice" 
                    id="number" 
                    required 
                    class="w-full h-10 rounded-md px-4 border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                    placeholder="Product Price" 
                    aria-label="Product Price">
            </div>

            <!-- Product Image -->
            <div>
                <label for="image" class="block text-md font-medium text-gray-700">Add Product Image</label>
                <div class="flex items-center space-x-4">
                    <input 
                        type="file" 
                        name="pdimage" 
                        id="image" 
                        required 
                        class="w-full h-10 rounded-md px-4 border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none file:bg-slate-200 file:text-slate-500 file:font-medium file:h-full file:pl-0 file:border-none file:cursor-pointer file:mr-4" 
                        aria-label="Product Image">
                </div>
            </div>

            <!-- Category Selection -->
            <div>
                <label for="cate" class="block text-md font-medium text-gray-700">Select Page Category</label>
                <select 
                    name="page" 
                    id="cate" 
                    required 
                    class="w-full h-10 rounded-md px-4 border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                    aria-label="Page Category">
                    <option value="Home">Home</option>
                    <option value="Bag">Bag</option>
                    <option value="Mobile">Mobile</option>
                    <option value="laptop">Laptop</option>
                </select>
            </div>

            <!-- Submit Button -->
            <button 
                type="submit" 
                name="submit" 
                class="w-full h-12 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                Upload
            </button>
        </form>
    </div>
    </div>
    <div class="overflow-x-auto mx-20">
        <table class="min-w-full bg-white border border-gray-300 border-spacing-4">
            <thead>
                <tr class="bg-gray-600 text-white">
                    <th class="px-4 py-2 border">Id</th>
                    <th class="px-4 py-2 border">Name</th>
                    <th class="px-4 py-2 border">Price</th>
                    <th class="px-4 py-2 border">Image</th>
                    <th class="px-4 py-2 border">Category</th>
                    <th class="px-4 py-2 border">Delete</th>
                    <!-- <th class="px-4 py-2 border">Update</th> -->
                </tr>
            </thead>
            
           
           
            <tbody>
               
        <?php
            include "config.php";
        $records = mysqli_query($config , "SELECT * FROM `tblproduct`");

            while($row = mysqli_fetch_array($records))

            echo"
             <tr class='bg-slate-200'>
                        <td class='px-4 py-2 border'>$row[id]</td>
                        <td class='px-4 py-2 border'>$row[pname]</td>
                        <td class='px-4 py-2 border'>$row[pprice]</td>
                        <td class='px-4 py-2 border'><img src='$row[image]' alt='' height='90px' width='200px'></td>
                        <td class='px-4 py-2 border'>$row[pcategory]</td>
                        <td class ='ml-5 px-4 py-2 border'><a href='' class='bg-amber-800 text-white font-bold text-xl w-3 rounded-md h-6'>HOME</a></td>
                    </tr>

            
            
            ";

            
        ?>

            </tbody>
        </table>
    </div>




        
    
    
</body>
</html>
