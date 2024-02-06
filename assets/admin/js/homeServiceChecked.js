var xml_http_homeServiceChecked;
	function homeServiceChecked(str)
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
			xml_http_homeServiceChecked=GetXmlHttpObject();
			if (xml_http_homeServiceChecked==null)
			{
			  alert ("Browser does not support HTTP Request");
			  return;
			}
			var site_url=get_admin_url();
			var url=site_url+"services/update-home-flag";
			//var url="homeServiceChecked.php";
			url=url+"/"+str+"/"+flag;
			//url=url+"&sid="+Math.random();
			//alert(url);
			xml_http_homeServiceChecked.onreadystatechange=userChanged_homeServiceChecked;
			xml_http_homeServiceChecked.open("GET",url,true);
			xml_http_homeServiceChecked.send(null);
		
	}
function userChanged_homeServiceChecked()
	{
		if (xml_http_homeServiceChecked.readyState==4)
		{
			 
			var str=xml_http_homeServiceChecked.responseText;
			//alert(str);
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
