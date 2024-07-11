<?php
echo "数値を入力して下さい: ";
$num1 = trim(fgets(STDIN));
if (is_numeric($num1)) {
    $total = $num1 * 2;
    echo "入力された数値の2倍は: $total\n";
} else {
    echo "有効な数値を入力して下さい。\n";
}
?>

