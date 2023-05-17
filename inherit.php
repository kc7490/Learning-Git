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

class level_ extends Fruit{
public $level;

public function __construct($name,$color,$level){
 $this->level = $level;
parent ::  __construct($name,$color );
}
}

$apple = new Fruit("Apple","Red");
$banana = new Fruit("banana", "yellow");
$papaya = new level_("papaya", "orange", 5);

echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
echo "<br>";
echo $banana->get_name();
echo "<br>";
echo $banana->get_color();
echo "<br>";
echo $papaya->get_name();
echo "<br>";
echo $papaya->get_color();
echo "<br>";
echo $papaya->level;
?>

</body>
</html>
