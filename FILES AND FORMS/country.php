<?php
$st=array("India"=>array("male"=>50,"female"=>35,"children"=>23),
          "Africa"=>array("male"=>67,"female"=>64,"children"=>60),
		  "Australia"=>array("male"=>20,"female"=>15,"children"=>10),
		  "China"=>array("male"=>100,"female"=>80,"children"=>85));
		  
sortArray($st);
$sum=0;
$i=0;
function sortArray(&$st)
{
arsort($st);
}
              // sorting it's country values in alphabetically   
foreach($st as  $nm=>$sub)   // taking key or address of array st and store in array name
{
$name[$i]=$nm;
$i++;
}
echo "<br> Country  Male  Female   Children<br>";
foreach($name as  $nm)   // taking the value from array name
{
	$sum=0;
	echo "<br> $nm    ";
	foreach($st[$nm] as  $ct=>$pop)   // based on that array name take key/index of next and the value
	{
		
		echo " $pop   ";
	}
}
echo "<br>";
	

?>