function cal(amt)
{
return amt*20/100
}
var amt=prompt("enter Amount");
var disc=cal(amt);
//alert("discount purchased amount "+amt+" is "+disc);
document.write("discount purchased amount "+amt+" is "+disc);