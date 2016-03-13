<?php
class negativeageexception extends Exception
{
 private $info;
public function __construct($msg)
{
$this->info=$msg;
}
public function getinfo()
{
 return $this->info;
}
}
$marks=120;
$age=10;
try
{
 if($age<=0)
{ 
 throw new negativeageexception("age cannot be negative or zero");
}
if($marks>100)
{
 throw new Exception();
}
}

catch(negativeageexception $n)
{
 echo $n->getinfo();
}
catch(Exception $e)
{
 echo "the marks should range from 0 to 100";
}
?>