<?php
  $side1 = $_GET["firstNum"];
  $side2 = $_GET["secondNum"];
  $side3 = $_GET["thirdNum"];

  class Triangle
  {
    private $firstNum;
    private $secondNum;
    private $thirdNum;


    function __construct($side1, $side2, $side3)
    {
      $this->firstNum = $side1;
      $this->secondNum = $side2;
      $this->thirdNum = $side3;
    }

    // function setFirst($new_first)
    // {
    //   $this->firstNum = $new_first;
    // }
    //
    // function setSecond($new_second)
    // {
    //   $this->secondNum = $new_second;
    // }
    //
    // function setThird($new_third)
    // {
    //   $this->thirdNum = $new_third;
    // }

    function getFirst()
    {
      return $this->firstNum;
    }

    function getSecond()
    {
      return $this->secondNum;
    }

    function getThird()
    {
      return $this->thirdNum;
    }
  }

$new_triangle = new Triangle($side1, $side2, $side3);
// $new_triangle->setFirst($firstNum);
// $new_triangle->setSecond($secondNum);
// $new_triangle->setThird($thirdNum);

?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <title>Triangles</title>
  </head>
  <body>
    <?php
      $new_side1 = $new_triangle->getFirst();
      $new_side2 = $new_triangle->getSecond();
      $new_side3 = $new_triangle->getThird();

      if(!$new_side1 || !$new_side2 || !$new_side3){
        echo "<h1>Enter all sides</h1>";
      }elseif($new_side1 + $new_side2 <= $new_side3 || $new_side1 + $new_side3 <= $new_side2 || $new_side2 + $new_side3 <= $new_side1 ){
        echo "<h2> Not a triangle </h2>";
      }elseif($new_side1 == $new_side2 && $new_side2 == $new_side3){
        echo "<h2> Equilateral </h2>";
      }elseif ($new_side1 == $new_side2 || $new_side2 == $new_side3 || $new_side1 == $new_side3) {
        echo "<h2> isosceles </h2>";
      } elseif($new_side1 != $new_side2 || $new_side2 != $new_side3 || $new_side1 != $new_side3) {
        echo "<h2> Scalene </h2>";
      }
    ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
  </body>
</html>
