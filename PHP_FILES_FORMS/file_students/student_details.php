<?php
$fp=fopen("studentdetails.txt","w");
fwrite($fp,"4nm13cs000:");
fwrite($fp,"arvind:");
fwrite($fp,"19:");
fwrite($fp,"mg road mangalore:");
fwrite($fp,"25262111\r\n");

fwrite($fp,"4nm13cs001:");
fwrite($fp,"basker:");
fwrite($fp,"20:");
fwrite($fp,"suratkal, mangalore:");
fwrite($fp,"25262112\r\n");

fwrite($fp,"4nm13cs002:");
fwrite($fp,"chirag:");
fwrite($fp,"18:");
fwrite($fp,"katpady:");
fwrite($fp,"25262113\r\n");

fwrite($fp,"4nm13cs003:");
fwrite($fp,"danush:");
fwrite($fp,"21:");
fwrite($fp,"bangalore");
fwrite($fp,"25262114\r\n");

fwrite($fp,"4nm13cs004:");
fwrite($fp,"hema:");
fwrite($fp,"25:");
fwrite($fp,"bangalore");
fwrite($fp,"25262115\r\n");
fclose($fp);
?>