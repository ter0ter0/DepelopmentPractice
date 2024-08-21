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

    <div class="menu-wrapper-container">
     
        <h1 class="shop">Shopping Start!</h1>
            <div class="menu">
                <h2>Mens Fashion</h2>  
               
                
                 
            </div>
            
            <form method="post" action="confirm.php">
                <div class="item-menus">
                    <?php foreach($items as $item): ?>
                        <div class="item-menu">
                            <a href="show.php?name=<?php echo $item->getName() ?>" class="item-name">
                                <?php echo $item->getName() ?>
                                
                            </a>
                            <img src="<?php echo $item->getImage() ?>" alt="<?php echo $item->getName() ?>">
                            <p><?php echo $item->getPrice()."円" ?></p>
                            <input type="text" value=0 name="<?php echo $item->getName() ?>">
                            <span>点</span>
                            
                        </div>
                    <?php endforeach ?>  
                    
                </div>
                
                <input type="submit" value="注文する"> 
            
            </form>
            
            
    </div>

</body>
</html>