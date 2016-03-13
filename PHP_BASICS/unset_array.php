<?php
$number =array(10,1,3,4,5,6,7,8,9);
echo"array before unsetting is<br>";
for($i=0;$i<9;$i++)
{
 echo"$number[$i]<br>";
}
for($i=0;$i<9;$i++)
{
  echo"unsetting value".$i."is".$number[$i]."<br>";
 unset($number[$i]);
  
}
?>