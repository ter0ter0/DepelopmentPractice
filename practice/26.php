<?php

    // for($i=1;$i<=100;$i++){
    //     if($i % 3 == 0 && $i % 5 == 0){
    //         echo "FizzBuzz" .PHP_EOL;
    //     }
    //     elseif($i % 3 == 0){
    //         echo "Fizz" .PHP_EOL;
    //     }
    //     elseif($i % 5 == 0){
    //         echo "Buzz" .PHP_EOL;
    //     }
    //     else{
    //         echo $i .PHP_EOL;
    //     }
    // }

    // $box = ["apple","banana"];
    // echo $box[0] .PHP_EOL;
    // $box[] = "orange";
    // echo $box[2] .PHP_EOL;

    // $box = ["name"=>"take","age"=>"31"];
    // echo $box["name"] .PHP_EOL;
    // echo $box["age"] .PHP_EOL;

    $box = [
        ["take","31"],
        ["ari","28"]
    ];
    // echo $box[0][0].$box[0][1]."歳" .PHP_EOL;
    foreach($box as $ball){
        echo "名前は".$ball[0]." ".$ball[1]."歳" .PHP_EOL;
    }

    // $box = [
    //         "take"=>
    //             ["age","from"],
    //         "ari"=>
    //             ["age","from"]
    
    //         ];
    // echo $box["take"][0] .PHP_EOL;

?>