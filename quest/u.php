<?php
echo "入力";
$n = fgets(STDIN);
function fibonacci($n){
    if($n <= 0){
        return;
    }
    $a = 0;
    $b = 1;
    $c = 1;
    for($i = 1; $i < $n; $i++){
        $c = $a + $b;
        $a = $b;
        $b = $c;
    }
    echo $c;
}

fibonacci($n);
?>
