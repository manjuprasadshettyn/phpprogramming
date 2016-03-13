<?php
echo "<br>students who belong to bangalore<br><br>";
$fp=fopen("studentdetails.txt","r");
$i=0;
while(!(feof($fp)))
{
$ch=fgets($fp);
if(preg_match('/bangalore/',$ch))
echo $ch ." <br>";
}