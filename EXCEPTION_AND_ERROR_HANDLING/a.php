<?
echo "Current Date<br><br>"; 
$dateTime = new DateTime("now", new DateTimeZone('sample/Calcutta')); 
echo $dateTime->format("d-m-y");
?> 