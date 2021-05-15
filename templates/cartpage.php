<?php
    error_reporting(0);
    session_start();
    require_once 'connect.php';

?>


<div>
<?php 

    foreach ($_SESSION['cart'] as $cartproductid): 
        $scart = mysqli_query($connect, "SELECT * FROM `dog` WHERE `id` = '$cartproductid'");
        $cartin = mysqli_fetch_array($scart);
?>
            <div>
                <div id="productcart">
                    <div id="cartProduct-img">
                        <?php $img=base64_encode($cartin['img']);?>
                        <img src="<?php echo $cartin['img']; ?>" alt="" width='300px' heigth='300px'>
                    </div>

                    <div id="productcarttable">
                        <div id="cartdivtable">
                            <table id="ProductcartTable">
                                <tr id="trname">
                                    <td class="tdcartname">название</td>
                                    <td class="tdcartname">артикул</td>
                                    <td class="tdcartname">цвет</td>
                                </tr>

                                 <tr id="trcartobject">
                                    <td class="trcartobject"><?php echo $cartin['name'];?></td>
                                    <td class="trcartobject"><?php echo $cartin['article']; ?></td>
                                    <td class="trcartobject"><?php echo $cartin['color']; ?></td>
                                </tr>
                            </table>
                        </div>
                        <div id="cartlinc">
                            <a href="/vendor/cartOrder.php/?id=<?php echo $cartin['id']?>" class="cartShopUnit" >заказать</a>
                            <a href="/vendor/cartDel.php/?id=<?php echo $cartin['id']?>" class="cartShopUnit">удалить</a>
                        </div>
                    </div>
                </div>
            </div>   
    <?php endforeach; ?>
    <?php if($cartin) {  ?>

        <div id="cartlinc">
            <a href="/vendor/cartOrderAll.php?>" class="cartShopUnit" >заказать все</a>                   
        </div> 

    <?php } ?>
        
<?php  if(!$cartin) { ?>
   
        <div>
             Ваша корзина пустая
        </div>
       
    
    <?php } ?>
    

            
</div>