<?php
$name=$_POST["name"];
$age=$_POST["age"];
$gen=$_POST["gen"];
$qa=$_POST["qual"];

$fp=fopen("empdetail.txt","a");
fwrite($fp,"\r\n");
fwrite($fp,"  $name");
fwrite($fp,"  $age");
fwrite($fp,"  $gen");
fwrite($fp,"  $qa");
fclose($fp);

echo "Contents of Emp Detail File<br><br>";
$fp=fopen("empdetail.txt","r");
while(!(feof($fp)))
{
$content=fgetc($fp);
if($content=="\n")
echo "<br>";
echo $content;
}
fclose($fp);
?>