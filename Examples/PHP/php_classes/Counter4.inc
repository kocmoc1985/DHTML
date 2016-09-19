<?php
//class with cloning funktion
class Counter4{
    //Memeber variables
    private $units = 0;
    private $weightPerUnit = 1;
    private static $totalItems = 0;

    //Member functions
    public function add($nbr = 1){
      $this->units = $this->units +$nbr;
      Counter4::$totalItems = Counter4::$totalItems + $nbr;
    }

    public function totalWeight(){
      return $this->units * $this->weightPerUnit;
    }
    
    public function nbrUnits(){
      return $this->units;
    }

    public static function nbrTotalItems(){
      return Counter4::$totalItems;
    }

    function __construct($nbr = 0){
      $this->units = $nbr;
      Counter4::$totalItems = Counter4::$totalItems + $nbr;
    }
    
    function __clone(){
      Counter4::$totalItems = Counter4::$totalItems + $this->units;
    }

}
?>