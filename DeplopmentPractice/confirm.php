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
        <?php foreach($items as $item): ?>
            <?php $orderCount = $_POST[$item->getName()] ?>
                <p class="order-price">
                    <?php echo $item->getName() ?>
                    <?php echo $orderCount." "."枚" ?>
                



                </p>
        <?php endforeach ?>

    </div>
    
</body>
</html>