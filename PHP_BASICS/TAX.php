<?php
function tax($amt)
{
 if($amt>400000)
 return ((($amt-400000)*0.2)+(220000*0.1));
 else
     if($amt>180000)
      return (($amt-180000)*0.1);
 else
  return 0;

}

$salary=600000;
echo "calculation of tax for the entered salary <br>";
$tax1=(tax($salary));
$amount=$salary-(tax($salary));
echo "the tax amount to be dedected is ".$tax1."<br>";
echo " the final salary amount is ".$amount;
?>