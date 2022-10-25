<?php
class Animal {
  public $name;
  public $legs;
  public $cold_blooded;

  function __construct($name, $legs, $cold_blooded) {
    $this->name = $name;
    $this->legs = $legs;
    $this->cold_blooded = $cold_blooded;


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
}

$domba = new Animal("domba garut", "4", "No");
echo "Name : ". $domba->get_name();
echo "<br>";
echo "Legs : ". $domba->get_legs();
echo "<br>";
echo "Cold blooded : ". $domba->get_cold_blooded();
echo "<br>";
?>
