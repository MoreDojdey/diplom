<?php
    session_start();
    require_once 'connect.php';

    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    $area = $_POST['area'];
    $adress = $_POST['adress'];
    $room = $_POST['room'];

define ('SITE_ROOT', realpath(dirname(__FILE__)));

  $path = 'uploads/' . time() . $_FILES['img']['name'];
        if (!move_uploaded_file($_FILES['img']['tmp_name'], SITE_ROOT.'//../' . $path)) {
            var_dump($_FILES);
            echo "<br>";
            var_dump($_FILES['img']['tmp_name']);
            echo "<br>";
            var_dump(SITE_ROOT.'../' . $path);

            echo "string";
        }




$sql = "INSERT INTO `dog` (`id`,`name`, `price`, `desc`, `area`,`adress`, `img`, `room`) VALUES (null,'$name', $price, '$desc', '$area','$adress', '$path', $room)";
$r = mysqli_query($connect, $sql);
// header('Location: ../index.php?page=shop');
mysqli_error($connect);
 ?>