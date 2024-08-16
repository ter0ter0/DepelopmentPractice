<?php

require_once("tops.php");
require_once("bottoms.php");

$tShirts = new Tops("Tシャツ","3000","tee_shirt-3.jpg");
$shirt = new Tops("シャツ","5000","shirt-3.jpg" );

$denim = new Bottoms("デニム","4000","pants-1.jpg");
$slacks = new Bottoms("スラックス","4500","pants-2.jpg");

$items = [$tShirts,$shirt,$denim,$slacks];

$tShirts->setOrderCount(2);


?>