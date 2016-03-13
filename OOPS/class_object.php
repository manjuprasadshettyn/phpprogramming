<?php
class customer
{
 private $name;
 private $age;
 function setname($name)
{
 $this->name=$name;
}
function setage($age)
{
 $this->age=$age;
}
 function getname()
{
 return $this->name;
}
function getage()
{
 return $this->age;
}
}

$custobj=new customer();
$newobject=new customer();
$custobj->setname("raj");
$custobj->setage("19");
print "customer name: ".$custobj->getname();
print "< br>";
print "customer age: ".$custobj->getage();
print "< br>";
$newobject->setname("mp");
$newobject->setage("19");
print "customer name: ".$newobject->getname();
print "< br>";
print "customer age: ".$newobject->getage();
print "< br>";
?>