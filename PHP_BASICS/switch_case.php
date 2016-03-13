<?php
$option ='Y';
switch($option)
{
 case 'y' :
 case 'Y': echo "your option is YES";
                break;
 case 'n':
 case 'N': echo "your option is NO";
              break;
  default : echo " wrong option ";
}
?>