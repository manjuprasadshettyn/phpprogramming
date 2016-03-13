<?php
try
{
 echo "current date <lr><br>";
$dateTime= new DateTIME("NOW",NEW DateTimeZone('asia/calcutta'));
echo $dateTime->format("d-m-y");
}
catch(Exception $e)
{
 echo "provide a valid time zone";
}
?>