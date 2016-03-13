<?php
$number=array(1,2,3,4,5,6,7,8,9,10);
$evensum=0;
$oddsum=0;
foreach($number as $i)
{
   if($i%2==0)
     $evensum=$evensum+$i;
   else
     $oddsum=$oddsum+$i;
}
echo "even sum is $evensum <br>";
echo "odd sum is $oddsum <br>";
?>