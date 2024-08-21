<?php 

require_once("data.php");

$menuName = $_GET["name"];

echo $menuName."の詳細です。";
$item = Menu::findByName($items,$menuName);

echo $item->getExplanation();
?>

<img src="<?php echo $item->getImage() ?>" alt="<?php echo $item->getName() ?>">
<p><?php echo $item->getPrice()."円" ?></p>

<a href="index.php?name=メニューページ">
<h3>メニューページへ戻る</h3>
</a>