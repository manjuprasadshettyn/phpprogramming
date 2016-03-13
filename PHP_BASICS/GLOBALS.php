<html>
<h2>-------USING $GLOBALS--------</h2>
<body>
<?php
function global_var()
{
	$GLOBALS["num1"]=10;
}
$num1=20;
echo "<h3>BEFORE FUNCTION CALL</h3>";
echo "num = $num1";

global_var();

echo "<h3>AFTER FUNCTION CALL</h3>";
echo "num = $num1";
?>
</body>
</html>	