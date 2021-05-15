<!DOCTYPE html>
<html lang="ru">
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<meta charset="UTF-8">
<link href="styles/site1.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<script src="scripts/site.js"></script>
<title>Онлайн магазин</title>
</head>
<body>
<header>
  <div id="logheader">
    <div id="iconheader">
      <a href="">
        <img src="../images/Mvk_logo_icon.svg">
      </a>
      <a href="">
        <img src="../images/Minstagram_logo_icon.svg">
      </a>
      <a href="">
        <img src="../images/Mwhatsapp_logo_icon.svg">
      </a>
    </div>
    <div id="phonenumber">
      <img class="phonecall" src="../images/phone-call-icon.svg">
      8 (800) 555-00-00
    </div>
    <div id="cartlinc">
      <a href="/?page=cart">
        корзина
        <img src="../images/shoppingbasket.svg">
      </a>
    </div>
  </div>

  <div id="mainheader">
    <div id="headerInside">
        <div id="navWrap">
            <a href="/"> 
              <img src="../images/ponylogo.png">
            </a>
            <a href="index.php?page=shop">
            каталог
            </a>
            <a href="index.php?page=profile">
            доставка
            </a>
            <a href="index.php?page=profile">
            о нас
            </a>
            <a href="index.php?page=login">
            вход
            </a>
           
        </div>
    </div>
  </div>  
</header>

<div id="content">

    <?php
 
    $goods = [];

    // определяем начальные данные
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'sasbuicy_m4');
 
     //соединяемся с сервером базы данных   
    $mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysqli->connect_errno) exit('Ошибка соединения с БД');
    $mysqli->set_charset('utf8');
         
       // подключаемся к базе данных

      $page = $_GET['page'];
      if (!isset($page)) {
        require('templates/main.php');

      }
      elseif ($page == "login") {
        require('index1.php');
      }
      elseif ($page == "profile") {
        require('profile.php');
      }
      elseif ($page == "register") {
        require('register.php');
      }
      elseif ($page == "red") {
        require('red.php');
      }
      elseif ($page == "shop") {
        require('templates/shop.php');
      }
      elseif ($page == "category") {
        require('templates/shop.php');
      }
       elseif ($page == "cart") {
        require('templates/cartpage.php');
      }
        elseif ($page == "orderUser") {
        require('templates/OrderUser.php');
      }
        elseif ($page == "order") {
        require('templates/order.php');
      }
      elseif ($page == "product") {              
           $id= $_GET['id'];
           $good=[];
           foreach ($goods as $product) {
               if ($product['id']==$id) {
                   $good = $product;
                   break;
               }
           }
           require('templates/openProduct.php');
      }

    ?> 


<footer>
  <div id="mainfooter">
    <div id="footerInside">
        <div id="contacts">
            <div class="contactWrap">
                <img src="images/envelope.svg" class="contactIcon">
                info@brandshop.ru
            </div>
            <div class="contactWrap">
                <img src="images/phone-call.svg" class="contactIcon">
                8 800 555 00 00
            </div>
            <div class="contactWrap">
                <img src="images/placeholder.svg" class="contactIcon">
                Москва, пр-т Ленина, д. 1 офис 304
            </div>
        </div>

        <div id="footerNav">
            <a href="/">Главная</a>
            <a href="index.php?page=shop">Магазин</a>
        </div>

        <div id="social">
            <img class="socialItem" src="images/vk-social-logotype.svg">
            <img class="socialItem" src="images/google-plus-social-logotype.svg">
            <img class="socialItem" src="images/facebook-logo.svg">
        </div>

        <div id="copyrights">&copy; Brandshop</div>
    </div>
    <div id="footercopyrights">
  </div>  


    </div>
</footer>

</body>
</html>