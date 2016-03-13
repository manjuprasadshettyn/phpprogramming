<?php
$fp=fopen("student.txt","w");
fwrite($fp,"101:");
fwrite($fp,"priya:");
fwrite($fp,"19:");
fwrite($fp,"bangalore\r\n");

fwrite($fp,"102:");
fwrite($fp,"prem:");
fwrite($fp,"20:");
fwrite($fp,"chennai\r\n");

fwrite($fp,"103:");
fwrite($fp,"anu:");
fwrite($fp,"18:");
fwrite($fp,"chennai\r\n");

fwrite($fp,"104:");
fwrite($fp,"jhon:");
fwrite($fp,"21:");
fwrite($fp,"bangalore\r\n");

fwrite($fp,"105:");
fwrite($fp,"amit:");
fwrite($fp,"25:");
fwrite($fp,"mumbai\r\n");
fclose($fp);

//displaying the contents of file
$fp=fopen("student.txt","r");
while(!(feof($fp)))
{
$content=fgetc($fp);
if($content=="\n")
echo "<br>";
echo $content;
}
fclose($fp);

echo "<br><br>  Students Belonging to Bangalore <br><br>";
$fp=fopen("student.txt","r");
$i=0;
while(!(feof($fp)))
{
$ch=fgets($fp);
if(preg_match('/bangalore/',$ch))
echo $ch ." <br>";
}


?>