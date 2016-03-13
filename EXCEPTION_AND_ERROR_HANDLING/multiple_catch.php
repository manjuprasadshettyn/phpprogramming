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
$age=23; 
$mark=400; 
try 
{
if($age<=0) 
{
throw new NegativeageException("Age can't be negative"); 
}
if($mark>100) 
{
throw new Exception(); 
}
}
catch(NegativeageException $n) 
{
echo $n->getInfo(); 
}
catch(Exception $e) 
{
echo "The marks should range from 0 to 100"; 
}
?>