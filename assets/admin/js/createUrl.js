var xml_http_createUrl;
	function createUrl(str)
	{
		if(str!='')
		{
			xml_http_createUrl=GetXmlHttpObject();
			if (xml_http_createUrl==null)
			{
			  alert ("Browser does not support HTTP Request");
			  return;
			}
			var site_url=get_admin_url();
			var res = str.replace("&", "and");
			var url=site_url+"ajax/create_url/"+res;
			//url=url+"?name="+res;
			//url=url+"&sid="+Math.random();
			//alert(url);
			xml_http_createUrl.onreadystatechange=userChanged_createUrl;
			xml_http_createUrl.open("GET",url,true);
			xml_http_createUrl.send(null);
		}
	}
function userChanged_createUrl()
	{
		if (xml_http_createUrl.readyState==4)
		{
			var check=xml_http_createUrl.responseText;
			document.getElementById("page_url").value=check;
			
			
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
