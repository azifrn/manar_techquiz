<?php
class Circle
{
   private $radius;

   public function getArea($radius)
   {
      $this->radius = $radius;
      return (pi() * pow($this->radius, 2));
   }
   
   public function getPerimeter($radius)
   {
      $this->radius = $radius;
      return (2 * pi() * $this->radius);
   }
}
$circy = new Circle(11);

echo $circy->getArea(11);
echo '<br>';
echo $circy->getPerimeter(4.44);
