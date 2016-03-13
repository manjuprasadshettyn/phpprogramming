<?php
$email_id="manju.mpsn@gmail.com";
$length=strlen($email_id);
for($i=0;$i<$length;$i++)
{
   if ($email_id[$i]=='@')
     break;
   else
      echo $email_id[$i];
}
?>