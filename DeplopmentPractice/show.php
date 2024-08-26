
<?php require_once("data.php");?>
<?php $menuName = $_GET["name"];?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <?php echo $menuName."の詳細です。"; ?>
        <?php $item = Menu::findByName($items,$menuName); ?>

        <?php echo $item->getExplanation(); ?>
            
        <img src="<?php echo $item->getImage() ?>" alt="<?php echo $item->getName() ?>">
            <p><?php echo $item->getPrice()."円" ?></p>

        <a href="index.php?name=メニューページ">
            <h3>メニューページへ戻る</h3>
        </a>

    </body>
</html>

