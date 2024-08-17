<?php 

class Menu{

    public $name;
    public $price;
    public $image;
    public $orderCount = 0;
    // public $totalPrice = 0;
   
    
    public function __construct($name,$price,$image){
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        
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

    // public function getTotalPrice(){
    //     return $this->totalPrice =+ $this->getItemsPrice();
    // }

 

  

 

}


?>