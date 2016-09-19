<?php
class Counter{
    //Memeber variables
    var $units = 0;
    var $weightPerUnit = 1;

    //konstuktor!!!
    function __construct($nbr = 0){
      $this->units = $nbr;
    }

    //$nbr = 1 -- is a default value in case if no nbr is given as inparameter
    function add($nbr = 1){
      $this->units = $this->units +$nbr;
    }

    //this is used in the same way as in java but
    //must be used together with -> operator
    function totalWeight(){
      return $this->units * $this->weightPerUnit;
    }

}
?>