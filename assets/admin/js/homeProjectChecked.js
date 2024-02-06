var xml_http_homeProjectChecked;
	function homeProjectChecked(str)
	{
		   document.getElementById("homeChkLoading"+str).style.visibility="visible";
		
			var chk=document.getElementById("homeChk"+str).checked;
			if(chk==true)
			{
			  var flag=1;	
			}
			else
			{
				var flag=0;
			}
			//alert(flag);
			xml_http_homeProjectChecked=GetXmlHttpObject();
			if (xml_http_homeProjectChecked==null)
			{
			  alert ("Browser does not support HTTP Request");
			  return;
			}
			var url="homeProjectChecked.php";
			url=url+"?id="+str+"&flag="+flag;
			url=url+"&sid="+Math.random();
			//alert(url);
			xml_http_homeProjectChecked.onreadystatechange=userChanged_homeProjectChecked;
			xml_http_homeProjectChecked.open("GET",url,true);
			xml_http_homeProjectChecked.send(null);
		
	}
function userChanged_homeProjectChecked()
	{
		if (xml_http_homeProjectChecked.readyState==4)
		{
			 
			var str=xml_http_homeProjectChecked.responseText;
			document.getElementById("homeChkLoading"+str).style.visibility="hidden";
			
			
			
			
		}
	}
	
	function GetXmlHttpObject()
	{
		if (window.XMLHttpRequest)
	  	{
	  	// code for IE7+, Firefox, Chrome, Opera, Safari
	  		return new XMLHttpRequest();
	  	}
		if (window.ActiveXObject)
	  	{
	 		 // code for IE6, IE5
	  		return new ActiveXObject("Microsoft.XMLHTTP");
	  	}
		return null;
	}
