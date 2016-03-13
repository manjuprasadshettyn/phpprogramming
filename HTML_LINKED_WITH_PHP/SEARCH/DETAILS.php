<?php 
$name=$_POST["MANJU"];
$name1="/".$name."/" ;
$fp=fopen("data.txt","r");
while(!(feof($fp)))
{
   $line=fgets($fp);
   
   if(preg_match($name1,$line))
   echo "<b>"."Customer information is" . "</b>"." ".$line."<br>";
   }
?>
