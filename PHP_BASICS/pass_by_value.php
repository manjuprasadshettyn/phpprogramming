<html>
<body>
<?php
function swap($a,$b)
{
 $temp=$a;
 $a=$b;
 $b=$temp;
 echo "<br><br> AFTER SWAP OPERATION <br><br>A = $a and B = $b";
}
$a=10;
$b=20;
echo "<br><br> BEFORE SWAP OPERATION <br><br>A = $a and B = $b";
swap($a,$b);
?>
</body>
</html>