<?php

require_once("menu.php");

class Bottoms extends Menu{

    public function __construct($name,$price,$image,$explanation){
        parent::__construct($name,$price,$image,$explanation);
        
    }


}

?>