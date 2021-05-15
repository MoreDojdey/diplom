<?php
    error_reporting(0);
    session_start();
    require_once 'connect.php';

?>


<div>
<?php 
    $OrderLogin = $_SESSION['user']['login'];
    echo "$OrderLogin";
    $order = mysqli_query($connect, "SELECT * FROM `order` WHERE `Orderlogin` = '$OrderLogin'");
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
                                    <td class="trcartobject"><?php echo $outorder['status']; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>   
    <?php endforeach; 