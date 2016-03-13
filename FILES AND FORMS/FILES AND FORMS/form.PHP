<html>
<head>
<title>Registration form</title>
<script>
function valid()
{
var nm=document.myform.un.value;
var pas=document.myform.pass.value;
if(nm!="" && pas!="")
{
	return true;
}
else 
{
alert("fill all the fields");
return false;
}
}
</script>
</head>
<body background="a.jpg">
<br/><center><b><font color="black" size="7">Welcome To NMAMIT Nitte</font></b></center>
<br/><br/>
<form name="myform" onsubmit="return valid();" action="IN.php" method="post">

<pre>
						Email ID     :     <input type="text" name="un"> 
					
						Password     :     <input type="password" name="pass">
						
						
								<input type="submit"  value="    Login    " onclick="valid">
								<!--<input type="email" id="email" placeholder="e@gmail.com">!-->
								
								   
			  
</pre>
</form>
<video width="320" height="240" controls>
  <source src="n1.mp4" type="video/mp4">
  <source src="n1.ogg" type="video/ogg">
Your browser does not support the video tag.
</video> 


</body>
</html>