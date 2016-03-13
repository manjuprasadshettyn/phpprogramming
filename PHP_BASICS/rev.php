<?php 
$a="ABCD";
$b=" "; #without this it considers $b as array and gives an error. 
$j=0;
for ($i=strlen($a)-1; $i >=0  ; $i--) { 
	$b[$j]=$a[$i];
	$j++;
}
echo $a;
echo "<br/>";
echo "$b";

 ?>