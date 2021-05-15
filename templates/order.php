<?php
    error_reporting(0);
    session_start();
    require_once 'connect.php';

?>


<div>
<?php 

    $order = mysqli_query($connect, "SELECT * FROM `order`");
    $sorder = mysqli_fetch_array($order);
    var_dump($sorder);
    var_dump($order);
    foreach ($order as $outorder):

        
?>
            <div>
                <div id="productcart">
                    <div id="cartProduct-img">
                        <?php $img=base64_encode($outorder['img']);?>
                        <img src="<?php echo $outorder['img']; ?>" alt="" width='300px' heigth='300px'>
                    </div>

                    <div id="productcarttable">
                        <div id="cartdivtable">
                            <table id="ProductcartTable">
                                <tr id="trname">
                                    <td class="tdcartname">название</td>
                                    <td class="tdcartname">артикул</td>
                                    <td class="tdcartname">цвет</td>
                                    <td class="tdcartname">статус</td>
                                </tr>

                                <tr id="trcartobject">
                                    <td class="trcartobject"><?php echo $outorder['name'];?></td>
                                    <td class="trcartobject"><?php echo $outorder['article']; ?></td>
                                    <td class="trcartobject"><?php echo $outorder['color']; ?></td>
                                    <td class="trcartobject">
                                        <form method="POST" action="../vendor/orderStatus.php/?id=<?php echo $outorder['id']?>">   
                                            <select name="orderSelect">
                                                <option value="пункт1">Пункт 1</option>
                                                <option value="Пункт2">Пункт 2</option>
                                            </select>
                                            <input type="submit">
                                        </form>        
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>   
    <?php endforeach; 

