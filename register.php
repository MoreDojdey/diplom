<?php
error_reporting(0);
session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }


?>


    <!-- Форма регистрации -->
<link rel="stylesheet" href="assets/css/main.css">

    <form   action="vendor/signup.php" method="post" enctype="multipart/form-data">
       <!--  <div id = "reg"> -->
            <label>ФИО</label>
            <input  type="text" name="full_name" placeholder="Введите свое полное имя">
            <label>Логин</label>
            <input type="text" name="login" placeholder="Введите свой логин">
            <label>Почта</label>
            <input type="email" name="email" placeholder="Введите адрес своей почты">
            <label>Изображение профиля</label>
            <input type="file" name="avatar">
            <label>Пароль</label>
            <input type="password" name="password" placeholder="Введите пароль">
            <label>Подтверждение пароля</label>
            <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
            <button type="submit">Войти</button>
       <!--  </div> -->
        <p>
            У вас уже есть аккаунт? - <a href="/?page=login">авторизируйтесь</a>!
        </p>
        <!-- <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?> -->
    </form>

