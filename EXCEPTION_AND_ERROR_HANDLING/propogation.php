<?php
function displaydate() 
{
try 
{
echo "Current Date<br><br>"; 
$dateTime = new DateTime("now", new DateTimeZone('sample/Calcutta')); 
echo $dateTime->format("d-m-y"); 
}
catch(MyException $e) 
{
}
}
try 
{
echo "Today's date"."<br>"; 
echo displaydate(); 
}
catch(Exception $n) 
{
echo "provide a valid time zone"; 
}
?>
