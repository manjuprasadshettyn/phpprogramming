<html>
<h2>-------USING global KEYWORD-------</h2>
<body>
<?php
global $num1;
$num1=10;
 $num1=20;
 echo $num1;
 echo "<br>";
 echo $num1;
 echo "<br>";
 echo $GLOBALS["num1"];
?>	
</body>
</html>