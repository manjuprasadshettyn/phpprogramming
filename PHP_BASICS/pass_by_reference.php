<html>
<body>
<?php
function swap(&$a,&$b)
{
 $temp=$a;
 $a=$b;
 $b=$temp;
}
$a=30;
$b=60;
echo "<br><br> BEFORE SWAP OPERATION <br><br>A = $a and B = $b";
swap($a,$b);
echo "<br><br> AFTER SWAP OPERATION <br><br>A = $a and B = $b";
?>
</body>
</html>