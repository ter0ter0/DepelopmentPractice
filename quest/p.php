<?php
echo "真偽を出力します\n";
echo "xの真偽を選択して下さい: true or false :";
$x_input = trim(fgets(STDIN));
$x = ($x_input === 'true') ? true : false;

echo "yの真偽を選択して下さい: true or false :";
$y_input = trim(fgets(STDIN));
$y = ($y_input === 'true') ? true : false;

function xor_func($x, $y) {
    if (($x && !$y) || (!$x && $y)) {
        return true; // x と y のどちらか一方が真の場合
    } 
    elseif($x == $y) {
        return false; // x と y が両方真または両方偽の場合
    }
    else{
        return "入力が違います";
    }
}

echo "結果: ";
echo $result ? "true\n" : "false\n" : "入力が違います";
?>
