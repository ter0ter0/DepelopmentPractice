<?php 
        $coin = 100;
        if($coin >= 100 ){
            echo "コインが". $coin. "円入りました。";
            file_put_contents("sample.php", $coin. "円");
        }
        else{
            echo $coin."円です。100円以上を入れて下さい";
        }

        
?>