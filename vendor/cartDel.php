<?php    
    session_start();
    require_once 'connect.php';

    $id = $_GET["id"];

    array_splice($_SESSION['cart'], $id, 1);
    unset($_SESSION['cart'][array_search($id,$_SESSION['cart'])]);

    header('Location:/?page=cart')
?>

