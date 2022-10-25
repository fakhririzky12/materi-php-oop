<?php
class Frog {
  public $name;
  public $legs;
  public $cold_blooded;
  public $jump;

  function __construct($name, $legs, $cold_blooded, $jump) {
    $this->name = $name;
    $this->legs = $legs;
    $this->cold_blooded = $cold_blooded;
    $this->jump = $jump;


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
function get_jump() {
    return $this->jump;
}
}

$Kelinci = new Frog ("Kelinci", "4", "No", "Twing Twing");
echo "Name : ". $Kelinci->get_name();
echo "<br>";
echo "Legs : ". $Kelinci->get_legs();
echo "<br>";
echo "Cold blooded : ". $Kelinci->get_cold_blooded();
echo "<br>";
echo "Jump : ". $Kelinci->get_jump();
echo "<br>";
?>