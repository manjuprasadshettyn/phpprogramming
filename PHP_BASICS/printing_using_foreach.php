<?php
$icecream_menu=array("chikku"=>220,"chocolate"=>220,"vanila"=>160,"chocochip"=>220);
print_r($icecream_menu);
echo"printing using foreach<br>";
foreach($icecream_menu as $key=>&$value)
{
  echo"$key = $value rs<br>";
}
 
?>