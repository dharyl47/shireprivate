var xml_http_getAllActiveModel;
	function getAllActiveModel(str)
	{
		   document.getElementById("featureChkLoading"+str).style.visibility="visible";
		
			
			//alert(flag);
			xml_http_getAllActiveModel=GetXmlHttpObject();
			if (xml_http_getAllActiveModel==null)
			{
			  alert ("Browser does not support HTTP Request");
			  return;
			}
			var site_url=get_admin_url();
			var url=site_url+"product/getAllActiveModel";
			//var url="getAllActiveModel.php";
			url=url+"/"+str+"/"+flag;
			//url=url+"&sid="+Math.random();
			//alert(url);
			xml_http_getAllActiveModel.onreadystatechange=userChanged_getAllActiveModel;
			xml_http_getAllActiveModel.open("GET",url,true);
			xml_http_getAllActiveModel.send(null);
		
	}
function userChanged_getAllActiveModel()
	{
		if (xml_http_getAllActiveModel.readyState==4)
		{
			 
			var str=xml_http_getAllActiveModel.responseText;
			//alert(str);
			document.getElementById("featureChkLoading"+str).style.visibility="hidden";
			
			
			
			
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
