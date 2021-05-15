<?php
    session_start();
    require_once 'connect.php';

	$id = $_GET["id"];



	$check_cart = mysqli_query($connect, "SELECT * FROM `dog` WHERE `id` = $id");
    if (mysqli_num_rows($check_cart) > 0) {

        $cart = mysqli_fetch_assoc($check_cart);
       	if (!isset($_SESSION['cart'])) {
 			$_SESSION['cart'] = [];
		}
        $_SESSION['cart'][] = $cart['id'];  


        header('Location: /?page=shop');
    }

?>
