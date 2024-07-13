<?php
#2つの整数 x, y の大小を比較し、xとyの大小関係を出力する関数 greater を定義してください。
#xよりyが大きければ「x > y」 xよりyが小さければ「x < y」 xとyの値が同じなら「x == y」
function greater($x,$y){
    if($x > $y){
        echo "x > y";
    }
    elseif($x < $y){
        echo "x < y";
    }
    else{
        echo "x == y";
    }

}
greater(3,4)

?>