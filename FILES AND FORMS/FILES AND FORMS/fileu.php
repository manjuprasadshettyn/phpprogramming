<?php
echo $_FILES["up"]["name"]."<br>";
echo $_FILES["up"]["type"]."<br>";
echo $_FILES["up"]["tmp_name"]."<br>";
echo $_FILES["up"]["size"]."<br>";
move_uploaded_file($_FILES["up"]["tmp_name"],"C:/upload/" .$_FILES["up"]["name"]);
echo "<br> file Copied";

?>