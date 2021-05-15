
<?php 
error_reporting(0);
session_start();
if (!$_SESSION['cart']) {
    $_SESSION['cart'] = [];
} 
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../scripts/jquery.js"></script>
<script src="../scripts/myCart.js"></script>
<link href="styles/site1.css" rel="stylesheet">
<h1 id="zagshop">
Каталог
</h1>
    

<?php if ($_SESSION['admin']){ ?>
    <div id="redbut"> 
        <a id="redbuttext" href="/?page=red" > добваить запись</a>
    </div>
<?php } ?>
    


<?php    
    $sql = 'SELECT * FROM `dog` ';
    if (isset($_GET["category"])){
        $category = $_GET['category']; 
        $sql=$sql."WHERE category = '$category'";
    }
    // if (isset($_POST['submit'])) {
    //     $search=explode(" ", $_POST['search']);
    //     $sql=$sql."WHERE `name` LIKE '%$search%'";
    //     $count=count($search);
    //     $array=array();
    //     $i=0;
    //     if ($count>1) {
    //         foreach($search as $key) {
    //             $i++;
    //             if($i < $count) $array[] = "WHERE `name` LIKE '%".$key."%' OR"; else $array[] = "WHERE `name` LIKE '%".$key."%'";
    //             $sql=$sql.implode("",$array);
    //     }
    //         }
    //             } 
    if (isset($_POST['submit'])) {
        $search=explode(" ", $_POST['search']);
        $count=count($search);
        $array=array();
            foreach($search as $key) {
                if(count($array)==0)
                    $array[] = "WHERE `name` LIKE '%".$key."%'"; 

                else 
                    $array[] = " OR `name` LIKE '%".$key."%'";

                
            }   
        $sql=$sql.implode("",$array);
    }
                  
  

    $sql = $mysqli->query($sql);
    $goods=[];
    while ($result=mysqli_fetch_array($sql)) {
        $goods[] = $result;
    }
    $mysqli->close();
 ?>

<div class="glavshop">
    <div>
        <form method="post" id="searchform">
            <input  type="text" name="search" class="search">
            <input class="submit" type="submit" name="submit" value="">
        </form>
    </div>  

<div id="mainshop">
   
    <div id="category"> 
        <a href="/?page=shop&category=glasses">очки</a>
        <a href="/?page=shop&category=watch">часы</a>
        <a href="/?page=shop&category=belts">ремни</a>
        <a href="/?page=shop&category=ties">галстуки</a>
        <a href="/?page=shop&category=bow-tie">галстук бабочки</a>
        <a href="/?page=shop&category=wallets">кошельки</a>
        <a href="/?page=shop&category=rings">кольца</a>
        <a href="/?page=shop&category=pendants">кулоны</a>
        <a href="/?page=shop&category=socks">носки</a>
        <a href="/?page=shop&category=cufflinks">запонки</a>
        <a href="/?page=shop&category=bracelets">браслеты</a>
        <a href="/?page=shop&category=suspenders">подтяжки</a>
    </div>           
<div class="shopproduct">

<?php foreach ($goods as $key => $good): ?>
    
<div class="shopUnit">
    <img src="<?php echo $good['img']; ?>" alt="" width='150px' heigth='150px'>
    
    <div class="shopUnitName">
        <?php echo $good['name']; ?>
    </div>
    <div id="shopUnitButton">
    <div class="shopUnitPrice">
       Цена: <?php echo $good['price']; ?>
    </div>

    <div class="shopUnitPrice">
       Артикул: <?php echo $good['article']; ?>
    </div>
    </div>
    <div id="shoplinc">
        <a href="/?page=product&id=<?php echo $good['id']?>"class="shopUnitMore">
            Подробнее
        </a>

        <a href="/vendor/cartAdd.php/?id=<?php echo $good['id']?>"class="shopUnitMore">
        добавить в корзину 
        </a>
    </div>
<!--         
    <form>
        <input type='text' value="<?php echo $good['id']?>" name='prodID' hidden>
        <input type="button" id="ATC" name="addToCart" value='addToCart' onclick='addToCart(<?php $good['id'] ?>)'>
        <input type="button" id="ATC" name="addToCart" value='addToCart' onclick=''>
    </form> -->
    
    </div>
<?php endforeach; ?>
</div>
</div>
</div>