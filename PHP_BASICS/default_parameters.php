<html>
<body>
<?php
function add($a=10,$b=10,$c=10)
{ 
  $res=$a+$b+$c;
  return ($res);
}
$a=30;
$b=60;
$c=20;
echo "USING USER DEFINED VALUES <br><br>";
$r=add($a,$b,$c);
echo "ADDITION OF $a,$b,$c is $r <br><br>";
echo " USING DEFAULT VALUES <br><br>";
$r=add();
echo "ADDITION OF 10,10,10 is $r <br><br>";
echo " USING DEFAULT VALUES (only for c) <br><br>";
$r=add($a,$b);
echo "ADDITION OF 30,60,10 is $r <br><br>";
?>
</body>
</html>
