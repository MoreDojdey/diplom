<?php
    session_start();
    require_once 'connect.php';

if (!$_SESSION['user']){
header('Location:/?page=login');
}

else {

    $id = $_GET["id"];

    $scart = mysqli_query($connect, "SELECT * FROM `dog` WHERE `id` = $id");
    $cartin = mysqli_fetch_array($scart);

    $OrderLogin = $_SESSION['user']['login'];

    $name = $cartin['name'];
    $img = $cartin['img'];
    $article = $cartin['article'];
    $color = $cartin['color'];
    

     mysqli_query($connect, "INSERT INTO `order` (`id`, `name`, `img`, `article`, `color`,`OrderLogin`,`status`) VALUES (NULL, '$name', '$img', '$article', '$color', '$OrderLogin', 'ожидается подтверждения')");

    array_splice($_SESSION['cart'], $id, 1);
    unset($_SESSION['cart'][array_search($id,$_SESSION['cart'])]);
}
?>