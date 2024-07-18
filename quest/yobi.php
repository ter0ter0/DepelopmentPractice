<?php
class Goku {
  public function skill($name, $damage){
    print "名前 = {$name} : ダメージ = {$damage}". '<br>'; 
  }
}


class Gohan extends Goku {

  }

  $dragonball = new Goku();
  $dragonball->skill('かめはめ波', '500');
  $dragonballZ = new Gohan();
  $dragonballZ->skill('かめはめ波', '500');
   
?>