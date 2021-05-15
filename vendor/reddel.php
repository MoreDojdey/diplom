<?php
require_once 'connect.php';

$id = $_POST['delite'];
(mysqli_query($connect, "DELETE FROM `dog` WHERE `id` = $id"));
header('Location: /?page=shop'); 
 ?>
