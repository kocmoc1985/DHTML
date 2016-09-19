<?php
//class that uses modifiers private, public and static
class Counter3{
    //Memeber variables
    private $units = 0;
    private $weightPerUnit = 1;
    private static $totalItems = 0;

    //konstuktor!!!
    function __construct($nbr = 0){
      $this->units = $nbr;
      Counter3::$totalItems = Counter3::$totalItems + $nbr;
    }

    //Member functions
    public function add($nbr = 1){
      $this->units = $this->units +$nbr;
      Counter3::$totalItems = Counter3::$totalItems + $nbr;
    }

    public function totalWeight(){
      return $this->units * $this->weightPerUnit;
    }
    
    //member function to retrieve value of private member variable
    public function nbrUnits(){
      return $this->units;
    }

    public static function nbrTotalItems(){
      return Counter3::$totalItems;
    }

  

}
?>