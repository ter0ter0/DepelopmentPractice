<?php

echo "お手伝いした日数を入力して下さい :";
$n = intval(fgets(STDIN));
#fibonacci関数を定義。仮引数をnとする。
function fibonacci($n){
    $a = 0;
    $b = 1;
    $c = 1;
    #iを１としてi~nまで加算する。
    for($i = 1; $i < $n; $i++){
        $c = $a + $b;
        $a = $b;
        $b = $c; 
    }
    echo $c;
}

#関数を呼び出す。引数をnとする。
fibonacci($n);

?>