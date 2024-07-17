<?php

$a = [1,2,3];
$b = $a;
$a[0] = 'a';
$b[2] = 'c';

var_dump($a);
var_dump($b);

?>