<?php 
class dividebyzero extends Exception 
{
private $info; 
public function __construct($message) 
{
$this->info=$message; 
}
public function getInfo() 
{
return $this->info; 
}
}
$numerator=4; 
$denominator=0; 

try 
{
if($denominator==0) 
{
throw new dividebyzero("DIVIDE BY ZERO"); 
}
else
{
$result=$numerator/$denominator;
echo $result;
}
}
catch(dividebyzero $n) 
{
echo $n->getInfo(); 
}
?>
