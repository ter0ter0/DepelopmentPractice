<?php

require_once("data.php");
require_once("menu.php");

echo "買い物を始めます。" .PHP_EOL;
echo "商品を選んでください。" .PHP_EOL;
echo "(1=" .$tShirts->getName()." "."or"." 2=".$denim->getName().")" .PHP_EOL;
$userSelect = fgets(STDIN);

if($userSelect == 1){
    echo "価格は". $tShirts->getPrice()."円です。" .PHP_EOL;
    echo "ご一緒にボトムスはいかがでしょうか？".PHP_EOL;
    echo "1=いる or 2=いらない" .PHP_EOL;
    $secondItem = fgets(STDIN);

    if($secondItem == 1){
        echo "ありがとうございます。価格は".$denim->getPrice()."円です。" .PHP_EOL;
        echo "2点で合計金額は".$tShirts->getPrice() + $denim->getPrice()."円です。".PHP_EOL;
    }
    else{
        echo "承知しました。".$tShirts->getName()."1点で".$tShirts->getPrice()."円です。" .PHP_EOL;
    }
    

}
else{
    echo "価格は". $denim->getPrice()."円です。" .PHP_EOL;
    echo "ご一緒にトップスはいかがでしょうか？".PHP_EOL;
    echo "1=いる or 2=いらない" .PHP_EOL;
    $secondItem = fgets(STDIN);

    if($secondItem == 1){
        echo "ありがとうございます。価格は".$tShirts->getPrice()."円です。" .PHP_EOL;
        echo "2点で合計金額は".$tShirts->getPrice() + $denim->getPrice()."円です。".PHP_EOL;
    }
    else{
        echo "承知しました。".$denim->getName()."1点で".$denim->getPrice()."円です。" .PHP_EOL;
    }
    
}



// foreach($items as $item){
//     echo $Menu->getName() . PHP_EOL;

// }

?>