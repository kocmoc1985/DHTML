/*
 * Om man inte vill definiera metoderna som funktioner direkt i 
 * konstruktorfunktionen så kan man definiera dem utanför denna
 * och sedan ange namnet i konstruktorfunktionen.
 */

function berakna_area(){
  var area=this.radie*this.radie*Math.PI;
  return area;
}

function berakna_diameter(){
  var diameter=this.radie+this.radie;
  return diameter;
}

function cirkel(r){
  this.radie=r; //egenskap som lagrar radien
  this.area=berakna_area;
  this.diameter=berakna_diameter;
}


var Testcirkel=new cirkel(25) //en ny instans har skapats av cirkelobjektet
alert("area="+Testcirkel.area()) //skriver ut 1962,5...
alert("diameter="+Testcirkel.diameter()) //skriver ut diameter=50
