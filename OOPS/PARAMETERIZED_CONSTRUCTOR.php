<?php
class student
{
      private $name;
      private $USN;
function __construct($a,$b)
{
      $this->name=$a;
      $this->USN=$b; 
}
function disp()
{   
 echo"<br > <b>  PARAMETISED CONSTRUCTOR   </b> <br>";
 echo"NAME: $this->name<br>";
 echo"USN: $this->USN<br>"; 
}
}
$first=new student("SHERLOCK","4NM13CS986");

$second=new student("HOLMES","4NM13CS996");
$first->disp();
$second->disp();

?>