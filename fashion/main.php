<?php

require_once("data.php");
require_once("menu.php");

echo "買い物を始めます。" .PHP_EOL;
echo "商品を選んでください。" .PHP_EOL;
echo "(1=" .$tops->getName()." "."or"." 2=".$bottoms->getName().")" .PHP_EOL;
$userSelect = fgets(STDIN);

if($userSelect == 1){
    echo "価格は". $tops->getPrice()."円です。" .PHP_EOL;
    echo "ご一緒にボトムスはいかがでしょうか？".PHP_EOL;
    echo "1=いる or 2=いらない" .PHP_EOL;
    $secondItem = fgets(STDIN);

    if($secondItem == 1){
        echo "ありがとうございます。価格は".$bottoms->getPrice()."円です。" .PHP_EOL;
        echo "2点で合計金額は".$tops->getPrice() + $bottoms->getPrice()."円です。".PHP_EOL;
    }
    else{
        echo "承知しました。".$tops->getName()."1点で".$tops->getPrice()."円です。" .PHP_EOL;
    }
    

}
else{
    echo "価格は". $bottoms->getPrice()."円です。" .PHP_EOL;
    echo "ご一緒にトップスはいかがでしょうか？".PHP_EOL;
    echo "1=いる or 2=いらない" .PHP_EOL;
    $secondItem = fgets(STDIN);

    if($secondItem == 1){
        echo "ありがとうございます。価格は".$tops->getPrice()."円です。" .PHP_EOL;
        echo "2点で合計金額は".$tops->getPrice() + $bottoms->getPrice()."円です。".PHP_EOL;
    }
    else{
        echo "承知しました。".$bottoms->getName()."1点で".$bottoms->getPrice()."円です。" .PHP_EOL;
    }
    
}



// foreach($items as $item){
//     echo $Menu->getName() . PHP_EOL;

// }

?>