<?php
$icecream_menu=array("chikku"=>220,"chocolate"=>220,"vanila"=>160,"chocochip"=>220);
print_r($icecream_menu);
foreach($icecream_menu as $key=>&$value)
{
  $icecream_menu[$key]=$value+50;
}
 echo"<br>array after modification <br>";
print_r($icecream_menu);
?>