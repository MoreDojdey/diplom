<?php
    session_start();
    require_once 'connect.php';

    // if (isset($_POST['prodID'])) {
    // 	echo $_POST;
    // }

    // function adddd() {
	   //  $js_code = 'console.log(' . json_encode('123', JSON_HEX_TAG) . ');';
	   //  if ($with_script_tags) {
	   //      $js_code = '<script>' . $js_code . '</script>';
	   //  }
	   //  echo $js_code;
    // }

    // $action = $_POST["action"];
    // if ($action == 'show'){
    // 	if(!(isset($_SESSION['cart']))){
    // 		echo "у вас нет заказов";
    // 		exit;
    // 	}
    // 	$cart = $_SESSION['cart'];
    // 	if (count($cart) == 0) {
    // 		echo "у вас нет заказов";
    // 		exit;
    // 	}

    // 	for ($i = 0; $i < count($cart); $i++){
    // 		$idproduct = $cart[$i]["idProduct"];
    // 		$query = "SELECT * FROM `dog` WHERE id='.$cart[$i]["idProduct"].'";
    // 		$result = $mysqli->query($query)
    // 		echo "$result";
    // 	}
    // }

    // $_SESSION['cart'] = [
    //         "id" => $user['id'],
    //         "full_name" => $user['full_name'],
    //         "avatar" => $user['avatar'],
    //         "email" => $user['email']
    //     ];

?>

<?php

    session_start();
    require_once 'connect.php';


	$id = $_GET["id"];



	$check_cart = mysqli_query("SELECT * FROM `dog` WHERE `id` = '$id'");
    if (mysqli_num_rows($check_cart) > 0) {

        $cart = mysqli_fetch_assoc($check_cart);

        $_SESSION['cart'] = [
            "id" => $cart['id'],
            "name" => $cart['name'],
            "price" => $cart['price'],
            "desc" => $cart['desc'],
            "article" => $cart['article'],
            "color" => $cart['color']
        ];
        var_dump($_SESSION['cart']);
    }

?>
