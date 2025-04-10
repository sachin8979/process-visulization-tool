<?php
session_start();

echo $product_name = $_POST['pname'];
echo $product_price = $_POST['pprice'];
echo $product_qty = $_POST['quantity'];

if (isset($_POST["cart"])) {
    // Validate quantity
    if ($product_qty <= 0) {
        echo "
            <script>
            alert('Quantity must be greater than 0');
            window.location.href = 'index.php'; 
            </script>
        ";
        exit;
    }

    // Check if the product is already in the cart
    $check_product = array_column($_SESSION["cart"] ?? [], 'productName');
    if (in_array($product_name, $check_product)) {
        echo "
            <script>
            alert('Product already added');
            window.location.href = 'index.php'; 
            </script>
        ";
    } else {
        // Add product to the cart
        $_SESSION["cart"][] = array(
            'productName' => $product_name,
            'productPrice' => $product_price,
            'productQty' => $product_qty
        );
        // header("location:viewcart.php");
        exit;
    }
}

// Remove product
if (isset($_POST["remove"])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['productName'] === $_POST['item']) {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']); // Reindex the array
            header("location:viewcart.php");
            exit;
        }
    }
}
?>
