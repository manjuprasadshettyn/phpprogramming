<?php
//NOTE:a folder named upload has to be created in c drive
move_uploaded_file($_FILES["filetoupload"]["tmp_name"],"c:/upload/" .$_FILES["filetoupload"]["name"]);
echo "<br> file moved";
$filename=$_FILES['filetoupload']['name'];
$type=$_FILES['filetoupload']['type'];
$tempname=$_FILES['filetoupload']['tmp_name'];
$filesize=$_FILES['filetoupload']['size'];
echo "<br> File Name:".$filename."<br>";
echo "<br> File Type:".$type."<br>";
echo "<br> Temporary Name:".$tempname."<br>";
echo "File Size: ".$filesize."<br>";
?>