var xml_http_selectModel;
	function selectModel(str)
	{
			xml_http_selectModel=GetXmlHttpObject();
			if (xml_http_selectModel==null)
			{
			  alert ("Browser does not support HTTP Request");
			  return;
			}
			var site_url=get_admin_url();
			var url=site_url+"services/getModelByDeviceId/"+str;
			//url=url+"?name="+res;
			//url=url+"&sid="+Math.random();
			//alert(url);
			xml_http_selectModel.onreadystatechange=userChanged_selectModel;
			xml_http_selectModel.open("GET",url,true);
			xml_http_selectModel.send(null);
		
	}
function userChanged_selectModel()
	{
		if (xml_http_selectModel.readyState==4)
		{
			var content=xml_http_selectModel.responseText;
			document.getElementById("modelSpan").innerHTML=content;
			
			
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
