<?PHP
$nm= $_POST["un"]; 
$pas= $_POST["pass"]; 
if($nm=="Praveen" && $pas=="nitte")
{
header("Location:1.PHP?un=$nm&ps=$pas");
}
else
{
header("Location:form.HTML");   // will take to another page
}

?>
