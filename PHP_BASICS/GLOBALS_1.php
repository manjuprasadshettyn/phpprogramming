<html>
<h2>-------USING $GLOBALS--------</h2>
<body>
<?php
function global_add()
{
	$num1=100;
	$num2=200;
	echo "<h3>USING LOCAL VALUES</h3>";
	echo $num1+$num2;
	echo "<h3>USING GOLOBAL VALUE</h3>";
	echo $num1+$GLOBALS["num3"];
}

$num3=10;
global_add();
?>	
</body>
</html>