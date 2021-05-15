<?php
    session_start();
    require_once 'connect.php';

if (!$_SESSION['user']){
header('Location:/?page=login');
}

else {
    foreach ($_SESSION['cart'] as $orderby): 
    $scart = mysqli_query($connect, "SELECT * FROM `dog` WHERE `id` = $orderby");
    $cartin = mysqli_fetch_array($scart);


    $name = $cartin['name'];
    $img = $cartin['img'];
    $article = $cartin['article'];
    $color = $cartin['color'];

    mysqli_query($connect, "INSERT INTO `order` (`id`, `name`, `img`, `article`, `color`) VALUES (NULL, '$name', '$img', '$article', '$color')");

    endforeach;
    unset($_SESSION['cart']);
}
    
?>