<?php require_once("menu.php") ?>
<?php require_once("data.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>shop</title>
</head>
<body>
    <div class="shop-container"> 
        <h1>Shopping Start!</h1>
    </div>
        <div class="menu">
            <h2>Mens Fashion</h2>
            
        </div>
        <?php foreach($items as $item): ?>
            <div class="item-menu">
                <h3><?php echo $item->getName() ?></h3>
                <img src="<?php echo $item->getImage() ?>" alt="<?php $item->getName() ?>">
                <p><?php echo $item->getPrice()."円" ?></p>
                <input type="text" value=0 name="<?php $item->getName() ?>">
                <span>枚</span>

    
            </div>
        <?php endforeach ?>

</body>
</html>