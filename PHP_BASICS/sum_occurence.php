<?php
$num=11001;
$x=$num;
$n=1;
$sum=0;
$count=0;
while($num!=0)
{
 $rem=$num%10;
 $sum=$sum+$rem;
 if($rem==$n)
   $count=$count+1;
   $num=$num/10;
}
echo "the sum of all digits of $x is $sum";
echo "<br> the occurence of $n in $x is $count";
?>