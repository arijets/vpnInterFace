function ValidateIPaddress(ipaddress)   
{  

	//let ipaddress = document.getElementByName('left_ip')
 if (/^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.test(myForm.emailAddr.name))  
  {  
    return (true)  
  }  
alert("You have entered an invalid IP address!")  
return (false)  
}