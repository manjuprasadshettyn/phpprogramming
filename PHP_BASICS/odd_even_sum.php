<?php
$evensum=0;
$oddsum=0;
for($i=1;$i<=50;$i++)
{
   if($i%2==0)
     $evensum=$evensum+$i;
   else
     $oddsum=$oddsum+$i;
}
echo "even sum between 1 to 50 is $evensum <br>";
echo "odd sum between 1 to 50 is $oddsum <br>";
?>