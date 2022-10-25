<?php
class Ape {
  public $name;
  public $legs;
  public $cold_blooded;
  public $yell;
  public $behaviour;

  function __construct($name, $legs, $cold_blooded, $yell, $behaviour) {
    $this->name = $name;
    $this->legs = $legs;
    $this->cold_blooded = $cold_blooded;
    $this->yell = $yell;
    $this->behaviour = $behaviour;


  }
  function get_name() {
    return $this->name;
  }
  function get_legs() {
    return $this->legs;
    
  }
  function get_cold_blooded() {
  return $this->cold_blooded;
}
function get_yell() {
    return $this->yell;
}
function get_behaviour() {
    return $this->behaviour;
}
}

$Monyet = new Ape ("Monyet", "2", "No", "uu aa uu aa", "bro pinjem duit dong nanti besok di ganti");
echo "Name : ". $Monyet->get_name();
echo "<br>";
echo "Legs : ". $Monyet->get_legs();
echo "<br>";
echo "Cold blooded : ". $Monyet->get_cold_blooded();
echo "<br>";
echo "Yell : ". $Monyet->get_yell();
echo "<br>";
echo "behaviour : ". $Monyet->get_behaviour();
echo "<br>";
?>