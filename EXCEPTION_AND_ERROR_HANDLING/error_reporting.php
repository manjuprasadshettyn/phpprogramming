<?
error_reporting(E_USER_WARNING); 
$fp=fopen("employeedetails.dat","r");

if($fp) 
{
echo "Reading"; 
}
else 
{
echo "File does not exist"; 
}
?>