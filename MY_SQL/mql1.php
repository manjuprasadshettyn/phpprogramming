<?php
$con= mysql_connect("localhost","root","");
mysql_select_db("manju",$con);
echo "connected<br>";
$sql="insert into emplyoee values(400,'rajesh',24,26000);";
$result=mysql_query($sql);
try
{
if($result>0)
echo "added";
else
echo "not";
}
catch(Exception $e)
{
echo $e;
}
?>