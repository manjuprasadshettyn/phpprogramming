<?php
if($_FILES['filetoupload']['error']==4)
{
	echo "Please choose the file";
}
else
{
	$templocation=$_FILES['filetoupload']['tmp_name'];
	$newlocation="F:/upload/".$_FILES['filetoupload']['name'];
	move_uploaded_file($templocation,$newlocation);
}
?>