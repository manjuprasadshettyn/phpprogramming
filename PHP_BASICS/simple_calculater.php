<?php
$a=10;
$b=20;
$ch='*';
switch($ch)
{
 case '+' : $c=$a+$b;
                echo "sum= $c";
                 break;
case '-' : $c=$a-$b;
                echo "difference= $c";
                 break;
case '*' : $c=$a*$b;
                echo "product= $c";
                 break;
case '/' : $c=$a/$b;
                echo "difference= $c";
                 break;
default: echo"invalid choice";
}
?>
                  