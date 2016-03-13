<?php
$value =10;
echo "-------empty unset() operation------";
if(empty($value))
{
 echo "<br> empty variable";
}
else 
{
 echo "<br> variable  exist";
}
$value=NULL;
echo"<br>----after assigning NULL to variable----";
if(empty($value))
{
 echo "<br> empty variable";
}
else
{
 echo "br> variable  exist";
}
?>