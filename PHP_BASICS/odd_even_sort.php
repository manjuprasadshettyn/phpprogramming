<?php
$number =array(1,3,2,5,8,2,7,4,9,6,11);
echo"array before sorting is<br>";
print_r($number);
sort($number);
foreach($number as $a)
{
  if(($a%2)==0) 
 $t[]=$a;
}
foreach($number as $b)
{
  if(($b%2)!=0)
  $t[]=$b;
}
 ksort($t);
 echo "<br>array after sorting is <br>";   
print_r($t);
?>
