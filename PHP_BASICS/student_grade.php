<?php
function avg($sum)
{
 $average=$sum/5;
  grade($average);
}

function grade($average)
{
 if($average>90 && $average<=100)
 echo "grade is S <br>";
 else
  if($average>75)
   echo "grade is A <br>";
  else
    if($average>60)
     echo "grade is B <br>";
 else
    if($average>50)
     echo "grade is C <br>";
 else
    if($average>40)
     echo "grade is D <br>";
 else
     echo "grade is F <br>";
}

$m1=95;
$m2=98;
$m3=99;
$m4=100;
$m5=96;
$sum=$m1+$m2+$m3+$m4+$m5;
avg($sum);
?>