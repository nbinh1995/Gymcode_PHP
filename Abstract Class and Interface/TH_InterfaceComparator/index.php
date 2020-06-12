<?php
abstract class Shape{
    public $name;

}
interface Comparator{
   
    public function compare($circleOne, $circleTwo);
}
class Circle extends Shape{
    private $radius;
    function __construct($name,$radius)
    {
        $this->name = $name;
        $this->radius = $radius;
    }
    public function __get($name)
    {
        return $this->$name;
    }
    public function __set($name,$value)
    {
        $this->$name = $value;
    }
}
class CircleComparator implements Comparator
{
  public function compare($circleOne, $circleTwo)
  {
      $radiusOne = $circleOne->__get('radius');
      $radiusTwo = $circleTwo->__get('radius');

      if ($radiusOne > $radiusTwo) {
          return 1;
      }  else if($radiusOne < $radiusTwo) {
          return -1;
      } else {
          return 0;
      }
  }
}
$circleOne = new Circle("circleOne", 6);
$circleTwo = new Circle("circleTwo", 7);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($circleOne, $circleTwo));
?>