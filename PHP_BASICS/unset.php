<?php
$value =10;
echo "-------before unset() operation------";
if(isset($value))
{
 echo "<br> variable exist and value is $value";
}
else 
{
 echo "<br> variable doesnot exist";
}
unset($value);
echo"<br>----after unset() operation ----";
if(isset($value))
{
 echo "<br> variable exists and value is $value";
}
else
{
 echo "br> variable doesnot exist";
}
?>