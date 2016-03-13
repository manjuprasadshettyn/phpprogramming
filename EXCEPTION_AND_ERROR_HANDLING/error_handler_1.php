<?php 
function error_handle($errno, $errmessage) 
{
echo "Dividing number by zero is not possible !!!!!!!!"; 
}
set_error_handler("error_handle"); 
$a=4;
$b=0;
$b=$a/$b; 
?>
