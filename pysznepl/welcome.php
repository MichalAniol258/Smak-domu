<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="chuj">
        <?php
        include 'config.php';
        session_start();
        $user_id = $_SESSION['user_id'];

        if (!isset($user_id)) {
            header('location:login.php');
        };

        if (isset($_GET['logout'])) {
            unset($user_id);
            session_destroy();
            header('location:login.php');
        };
        ?>

        <?php
        $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
        $grand_total = 0;
        if (mysqli_num_rows($cart_query) > 0) {
            while ($fetch_cart = mysqli_fetch_assoc($cart_query)) {
                $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']);
                $grand_total += $sub_total;
            }
            // Move the success message and final total calculation here
            ?>
            <h1>Zamówienie się powiodło!</h1> <br>
            <p>Ostateczna cena: <?php echo $grand_total; ?>zł</p>
            <div class="cart-btn">  
   <a href="index.php" id="amogus" class="btn">back →</a>
</div>
        <?php
        } else {
            // Display a message if the cart is empty
            echo '<p>Twój koszyk jest pusty.</p>';
        }
        ?>
    </div>
</body>

</html>
