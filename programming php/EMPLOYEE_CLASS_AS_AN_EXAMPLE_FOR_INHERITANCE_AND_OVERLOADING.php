<?php
class employee 
{
 protected $ename;
 protected $sal;
function __construct($ename, $sal = 100) 
{
 $this->ename = $ename;
 $this->sal = $sal;
}
function give_raise($amount) 
{
$this->sal+= $amount;
printf("Employee %s got raise of %d dollars\n", $this->ename, $amount);
printf("New salary is %d dollars\n", $this->sal);
}
function __destruct() 
{
printf("Good bye, cruel world: EMPLOYEE:%s\n", $this->ename);
}
}
class manager extends employee 
{
protected $dept;
function __construct($ename, $sal, $dept) 
{
parent::__construct($ename, $sal);
$this->dept = $dept;
}
function give_raise($amount) 
{
parent::give_raise($amount);
print "This employee is a manager\n";
}
function __destruct() 
{
printf("Good bye, cruel world: MANAGER:%s\n", $this->ename);
parent::__destruct();
}
} // Class definition ends here.
$mgr = new manager("Smith", 300, 20);
$mgr->give_raise(50);
$emp = new employee("Johnson", 100);
$emp->give_raise(50);
?>