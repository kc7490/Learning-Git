<!DOCTYPE html>
<html>
<body>


<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function __construct($name,$color ) {
    $this->name = $name;
    $this->color = $color;
  }
  
  
  
  function get_color() {
    return $this->color ;
  }
  
  function get_name() {
    return $this->name;
  }


}

$apple = new Fruit("Apple","Red");
$banana = new Fruit("banana", "yellow");

echo $apple->get_name();
echo "<br>";

echo $apple->get_color();
echo "<br>";
echo $banana->get_name();
echo "<br>";
echo $banana->get_color();
?>
 
</body>
</html>
