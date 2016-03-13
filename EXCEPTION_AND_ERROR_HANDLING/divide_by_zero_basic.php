<?php 


try 
{
echo "Current Date<br><br>"; 
$dateTime = new DateTime("now", new DateTimeZone('sample/Calcutta')); 
echo $dateTime->format("d-m-y"); 
}
catch(Exception $e) 
{
echo $e;
echo "provide a valid time zone"; 
}
?>