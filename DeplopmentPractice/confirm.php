<?php require_once("data.php") ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="oder-Wrapper">
        <h2>注文内容確認</h2>
        <?php $totalPrice = 0 ?> 
        <?php $totalCount = 0 ?>
       
        <?php foreach($items as $item): ?>
            
            <?php $orderCount = $_POST[$item->getName()] ?>
                <p class="order-price">
                    <?php echo $item->getName()." "."×" ?>
                    <?php $item->setOrderCount($orderCount) ?>
                    <?php echo $item->getOrderCount()." "."点" ?>
                    <?php echo $item->getItemsPrice()." "."円" ?>
                    <?php $totalCount += (int)$item->getOrderCount(); ?>
                    <?php $totalPrice += (int)$item->getItemsPrice(); ?>
                    
                            
            

                </p>
        <?php endforeach ?>
        <?php echo "合計で".$totalCount."枚、"." ".$totalPrice." "."円です。" ?>
        
      
        <!-- <?php echo $totalPrice ?> -->
      
      

    </div>
    
</body>
</html>