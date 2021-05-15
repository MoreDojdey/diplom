<?php 
error_reporting(0);
session_start(); 
?>
<?php
    $id = $_GET["id"];
    $sql = "SELECT * FROM `dog` WHERE id = '$id' ";   
    $sql = $mysqli->query($sql);
    $good=mysqli_fetch_array($sql);
    $mysqli->close();
?>
<?php if ($_SESSION['admin']){ ?>
    <form action="vendor/reddel.php" method="post">
        <button id = "delbut" name= "delite" value=<?= $good['id']?> type="submit">удалить</button>
    </form>
<?php } ?>
<div id="openedProductGrid">
 <div id="openedProduct-imgborder">
    <div id="openedProduct-img">
    <?php $img=base64_encode($good['img']);?>
    <img src="<?php echo $good['img']; ?>" alt="" width='150px' heigth='150px'>
</div>    


</div>



    <div id="openedProduct-content">
        <div>
            <div id="openedProductName">
               <?php echo $good['name'];?> 
            </div>
            <div id="openedProductPrice">
               цена: <?php echo $good['price']; ?> 
            </div>
        </div>
<!--                 <table>
            <tr>
                описание
                <td><?php echo $good['desc'];?></td>
            </tr>
             <tr>
                артикул
                <td><?php echo $good['article']; ?></td>
            </tr>
            <tr>
                материал
                <td><?php echo $good['structure']; ?>  </td>
            </tr>
            <tr>
                <td>...</td>
            </tr>
            <tr>
                <td>...</td>
            </tr>
        </table> -->

        <table id="openedProductTable">
            <tr id="trname">
                <td class="tdname">описание</td>
                <td class="tdname">артикул</td>
                <td class="tdname">материал</td>
                <td class="tdname">производитель</td>
                <td class="tdname">цвет</td>
                <td class="tdname">вес</td>
            </tr>
             <tr id="trobject">
                <td class="tdobject"><?php echo $good['desc'];?></td>
                <td class="tdobject"><?php echo $good['article']; ?></td>
                <td class="tdobject"><?php echo $good['structure']; ?></td>
                <td class="tdobject"><?php echo $good['manufacturer']; ?></td>
                <td class="tdobject"><?php echo $good['color']; ?></td>
                <td class="tdobject"><?php echo $good['weight']; ?></td>
            </tr>
        </table>
        <!-- <div>
            </br><?php echo $good['name'];?>
        </div>
        </br>
        <div>
            Описание:</br> <?php echo $good['desc'];?>   
        </div>
        
        <div>
            Цена:</br> <?php echo $good['article']; ?>   
        </div>
        
        <div>
            Количество комнат:</br> <?php echo $good['structure']; ?>  
        </div>
        
        <div>
            Площадь:</br></br> <?php echo $good['price']; ?> м2  
        </div>
        
        <div>
            Адрес:</br> <?php echo $good['manufacturer']; ?>   
        </div>
        <div>
            Адрес:</br> <?php echo $good['color']; ?>   
        </div>
        <div>
            Адрес:</br> <?php echo $good['weight']; ?>   
        </div>
        <div>
        <form>

        <input type='text' value="<?php echo $good['id']?>" name='prodID' hidden>
        <input type="button" id="ATC" name="addToCart" value='addToCart' onclick='addToCart(<?php $good['id'] ?>)'>
        </form>
        </div> -->
</div>
</div>  
