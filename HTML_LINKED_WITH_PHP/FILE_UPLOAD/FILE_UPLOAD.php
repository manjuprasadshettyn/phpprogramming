<?php
//NOTE:a folder named upload has to be created in c drive
move_uploaded_file($_FILES["filetoupload"]["tmp_name"],"c:/upload/" .$_FILES["filetoupload"]["name"]);
echo "<br> file moved";
?>