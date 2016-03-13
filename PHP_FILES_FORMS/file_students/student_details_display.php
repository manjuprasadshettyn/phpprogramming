<?php
$fp=fopen("studentdetails.txt","r");
while(!(feof($fp)))
{
$content=fgets($fp);
echo $content."<br>";
}
fclose($fp);
?>
