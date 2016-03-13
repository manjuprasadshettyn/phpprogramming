<?php
$st=array("Divya"=>array("Maths"=>40,"Science"=>40,"English"=>42,"Unix"=>46,"PHP"=>52),
          "Navya"=>array("Maths"=>64,"Science"=>69,"English"=>60,"Unix"=>64,"PHP"=>62),
	  "Pawan"=>array("Maths"=>50,"Science"=>50,"English"=>50,"Unix"=>54,"PHP"=>52),
	  "Soumya"=>array("Maths"=>80,"Science"=>90,"English"=>90,"Unix"=>84,"PHP"=>82),
	  "Ranjan"=>array("Maths"=>90,"Science"=>90,"English"=>90,"Unix"=>94,"PHP"=>92));

$sum=0;
$i=0;
foreach($st as  $nm=>$sub)   // taking key or address of array st and store in array name
{
$name[$i]=$nm;
$i++;
}

foreach($name as  $nm)   // taking the value from array name
{
	$sum=0;
	echo "<br>	Student Name :  $nm<br>";
	echo "<br>	Subject 	 Marks:<br>";
	ksort($st[$nm]);
	foreach($st[$nm] as  $sub=>$mark)   // based on that array name take key/index of next and the value
	{
		$sum=$sum+$mark;
		echo "	 $sub 		 $mark<br>";
	}
	$avg=$sum/5;
	if($avg>=90 && $avg<=100)
		$g="O";
	else if($avg>=70 && $avg<=89)
		$g="A";
	else if($avg>=60 && $avg<=69)
		$g="B";
	else if($avg>=50 && $avg<=59)
		$g="C";
	else if($avg<50)
		$g="F";
    echo "<br>	 Total: $sum <br>	 Average:$avg <br>	Grade:$g<br>";
	echo"*************************************************************************<br><br>";
}

?>