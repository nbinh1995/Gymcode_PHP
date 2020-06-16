<?php
include_once('Comparator.php');
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
?>