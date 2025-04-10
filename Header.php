<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Header</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="h-20 w-full bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 flex justify-between items-center shadow-lg px-4 md:px-8">
        <!-- Logo -->
        <div>
            <h1 class="text-2xl md:text-4xl font-bold text-white border-2 border-indigo-600 w-fit h-fit bg-indigo-600 rounded-2xl px-4 py-1 shadow-md">
                E-SHOPER
            </h1>
        </div>
        <!-- Navigation Links -->
        <div class="hidden md:flex mr-4 flex-wrap space-x-7">
            <div class="flex items-center">
                <i class="fa-solid fa-house text-white"></i>
                <a href="index.php" class="pl-2 text-white hover:text-indigo-400">Home</a>
            </div>
            <div class="flex items-center">
                <i class="fa-solid fa-cart-shopping text-white"></i>
                <a href="viewcart.php" class="pl-2 text-white hover:text-indigo-400">Cart(0)</a>
            </div>
            <div class="flex items-center">
                <i class="fa-solid fa-user text-white"></i>
                <a href="" class="pl-2 text-white hover:text-indigo-400">Hello</a>
            </div>
            <div class="flex items-center">
                <i class="fa-solid fa-right-to-bracket text-white"></i>
                <a href="" class="pl-2 text-white hover:text-indigo-400">Login</a>
            </div>
            <div>
                <a href="../admin/mystore.php" class="font-bold text-md text-white hover:text-indigo-400">Admin</a>
            </div>
        </div>
        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="menu-toggle" class="text-white">
                <i class="fa-solid fa-bars text-2xl"></i>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-gray-800 text-white px-4 py-2">
        <div class="flex flex-col space-y-4">
            <div class="flex items-center">
                <i class="fa-solid fa-house"></i>
                <a href="index.php" class="pl-2 hover:text-indigo-400">Home</a>
            </div>
            <div class="flex items-center">
                <i class="fa-solid fa-cart-shopping"></i>
                <a href="viewcart.php" class="pl-2 hover:text-indigo-400">Cart(0)</a>
            </div>
            <div class="flex items-center">
                <i class="fa-solid fa-user"></i>
                <a href="" class="pl-2 hover:text-indigo-400">Hello</a>
            </div>
            <div class="flex items-center">
                <i class="fa-solid fa-right-to-bracket"></i>
                <a href="" class="pl-2 hover:text-indigo-400">Login</a>
            </div>
            <div>
                <a href="../admin/mystore.php" class="font-bold hover:text-indigo-400">Admin</a>
            </div>
        </div>
    </div>

    <!-- Panel -->
    <div class="h-10 w-full bg-gray-700 flex justify-center shadow-md">
        <div class="space-x-10 md:space-x-20 pt-1 text-sm md:text-xl font-bold text-white">
            <a href="laptop.php" class="hover:text-indigo-400">Laptop</a>
            <a href="mobile.php" class="hover:text-indigo-400">Mobile</a>
            <a href="bag.php" class="hover:text-indigo-400">Bag</a>
        </div>
    </div>

    

<!--  fontawesome -->
    <script src="https://kit.fontawesome.com/cd899bf2d5.js" crossorigin="anonymous"></script>
    <script>
        // Toggle mobile menu visibility
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html> 
