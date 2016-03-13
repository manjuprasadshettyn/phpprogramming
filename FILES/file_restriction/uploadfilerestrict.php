<?php
if($_FILES['filetoupload']['type']=="text/plain")
{
	if($_FILES['filetoupload']['size']<100)
	{
	$templocation=$_FILES['filetoupload']['tmp_name'];
	$newlocation="c:/upload/".$_FILES['filetoupload']['name'];
	move_uploaded_file($templocation,$newlocation);
	echo "File uploaded!";
	}
	else
	{
		echo "Files size should be less than 100 bytes";
	}
}
else
{
	echo "Upload .txt file";
}
?>
