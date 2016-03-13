<?php
echo "name:".$_GET["name"]."<br>";
echo "age:".$_GET["age"]."<br>";
echo "gender:".$_GET["gender"]."<br>";
$fp=fopen("customer.php","a");
fwrite($fp,"name:".$_GET["name"]."<br>");
fwrite($fp,"age:".$_GET["age"]."<br>");
fwrite($fp,"gender:".$_GET["gender"]."<hr>");
fclose($fp);
?>