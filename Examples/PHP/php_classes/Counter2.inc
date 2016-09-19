<?php
//Class with added construct
class Counter2{
    //Memeber variables
    var $units = 0;
    var $weightPerUnit = 1;

    //Member functions
    function add($nbr = 1){
      $this->units = $this->units +$nbr;
    }

    function totalWeight(){
      return $this->units * $this->weightPerUnit;
    }

    function __construct($nbr = 0){
      $this->units = $nbr;
    }
    
}
?>