<?php
echo "<h3> WITHOUT USING STATIC VARIABLE </H3>";
 function display ()
{
 $num=10;
 echo $num;
 $num++;
}
 echo "first call <br>";
 display();
 
 echo "<br><h3> USING STATIC VARIABLE </h3>";
 function display1()
 {
  static $num=10;
  echo $num;
  $num++;
 }
 echo "first call <br>";
 display1();
 echo "<br> second call <br>";
 display1();
?>