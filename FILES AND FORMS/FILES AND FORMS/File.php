<?php


//Reading Files  

$a=file_get_contents("praveen.txt");
echo $a. "<br>";

/* from different location*/
//$con=file_get_contents("http://172.16.2.3/IBM/first.php");
echo "<br>";
$con=file_get_contents("ftp://172.16.3.238/software/windows/office/office2010/Standard/en_office_standard_2010_x86_515544.exe.sha1.txt");
echo $con. "<br>";
echo "<br>";
$happy="yeh tits changed";
file_put_contents("praveen.txt",$happy);


echo "<br>";echo "<br>";

copy("me.txt","praveen.txt"); //copies me to praveen
unlink("me.txt");  //delete

?>