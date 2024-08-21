<?php

require_once("tops.php");
require_once("bottoms.php");
require_once("explanation.php");

$tShirts = new Tops("Tシャツ","3000","tee_shirt-3.jpg","<br>半袖シャツです。夏場におすすめです");
$shirt = new Tops("シャツ","5000","shirt-3.jpg","<br>長袖シャツです。オールシーズンおすすめです。");

$denim = new Bottoms("デニム","4000","pants-1.jpg","<br>デニムです。カジュアルスタイルにおすすめです。");
$slacks = new Bottoms("スラックス","4500","pants-2.jpg","<br>スラックスです。ビジネススタイルにおすすめです。");

$items = [$tShirts,$shirt,$denim,$slacks];

// $explanation = new Explanation("半袖シャツで夏場におすすめです");


?>