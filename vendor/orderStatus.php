<?php
require_once 'connect.php';

$id = $_GET["id"];
$select = htmlspecialchars ($_POST["orderSelect"]);
mysqli_query($connect, "UPDATE `order` SET status='$select' WHERE `id` = $id");
?>