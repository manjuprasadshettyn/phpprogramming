<?php
$a=$_POST["empno"];
$b=$_POST["name"];
$c=$_POST["age"];
$d=$_POST["salary"];
$con= mysql_connect("localhost","root","");
mysql_select_db("manju",$con);
echo "connected<br>";
$sql="insert into emplyoee values($a,'$b',$c,$d);";
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