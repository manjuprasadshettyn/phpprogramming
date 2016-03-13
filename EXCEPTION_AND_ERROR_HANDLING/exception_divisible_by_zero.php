<?php
class dividebyzero extends Exception 
{
private $info;
function __construct($msg) 
{
$this->info = $msg;
}
public function getinfo() 
{
return $this->info;
}
}
$a=10;
$b=0;
try 
{
if ($b==0) 
{
throw new dividebyzero("a number cannot be divided by zero");
}
else 
{
$c=$a/$b;
echo "the result is ".$c;
}
}
catch(dividebyzero $execption) 
{
echo $execption->getinfo();
}
?>