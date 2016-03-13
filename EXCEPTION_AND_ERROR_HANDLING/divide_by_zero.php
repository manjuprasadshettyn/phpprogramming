<?php 
class NegativeageException extends Exception 
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
$stuname="john"; 
$age=-23; 
$mark=56; 
try 
{
if($age<=0) 
{
throw new NegativeageException("Age can't be negative"); 
}
}
catch(NegativeageException $n) 
{
echo $n->getInfo(); 
}
?>
