function ValidateEmail(inputText)  
{  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(inputText.value.match(mailformat))  
{  
document.form1.text1.focus();  
return true;  
}  
else  
{  
alert("You have entered an invalid email address!");  
document.form1.text1.focus();  
return false;  
}  
}  
function ValidateName (iText)
{
var nameformat =/^[A-Za-z]+$/;
if(iText.value.match(nameformat))
{
	return true;
}
else
{
alert("Enter characters only ");
return false ;	
}
}
function ValidatePhone (inpT)
{
	var phformat =/^\d{10}$/; 	 
	if(inpT.value.match(phformat))
	{
		return true ;
	}
	else
	{
	alert("invalid phone number");
	return false;	
	}
}
