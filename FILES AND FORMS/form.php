<?php
$name=$_POST["nm"];
$age=$_POST["age"];
$gender=$_POST["gen"];
$fp=fopen("Emplyoee.txt","a");
fwrite($fp,"\r\n");
fwrite($fp,$name);
fwrite($fp," : ");
fwrite($fp,$age);
fwrite($fp," : ");
fwrite($fp,$gender);
fwrite($fp," : ");
fwrite($fp,$name);
if( isset($_POST["qual1"]))
{
fwrite($fp," : ");
fwrite($fp,$_POST["qual1"]);
}
if( isset($_POST["qual2"]))
{
fwrite($fp," : ");
fwrite($fp,$_POST["qual2"]);
}
if( isset($_POST["qual3"]))
{
fwrite($fp," : ");
fwrite($fp,$_POST["qual3"]);
}
fclose($fp);
echo "succefully copied to file<br><br>";

//displaying the contents of file
$fp=fopen("Emplyoee.txt","r");
while(!(feof($fp)))
{
$content=fgetc($fp);
if($content=="\n")
echo "<br>";
echo $content;
}
fclose($fp);

?>