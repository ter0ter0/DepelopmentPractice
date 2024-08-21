<?php 

class Menu{

    public $name;
    public $price;
    public $image;
    public $orderCount = 0;
    public $explanation;
   
    
    public function __construct($name,$price,$image,$explanation){
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->explanation = $explanation;
        
        
    }

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getImage(){
        return "image/".$this->image;
    }

    public function getOrderCount(){
        return $this->orderCount;
    }

    public function setOrderCount($orderCount){
        $this->orderCount = $orderCount;
    }

    public function getItemsPrice(){
        return (int)$this->getPrice() * (int)$this->orderCount;
    }

    public function getExplanation(){
        return $this->explanation;
    }

    public static function findByName($items,$name){
        foreach($items as $item){
            if($item->getName() == $name){
                return $item;
            }
        }
    }
 

  

 

}


?>