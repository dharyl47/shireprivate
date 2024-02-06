var xml_http_featureChecked;
	function featureChecked(str)
	{
		   document.getElementById("featureChkLoading"+str).style.visibility="visible";
		
			var chk=document.getElementById("featureChk"+str).checked;
			if(chk==true)
			{
			  var flag=1;	
			}
			else
			{
				var flag=0;
			}
			//alert(flag);
			xml_http_featureChecked=GetXmlHttpObject();
			if (xml_http_featureChecked==null)
			{
			  alert ("Browser does not support HTTP Request");
			  return;
			}
			var site_url=get_admin_url();
			var url=site_url+"product/featureChecked";
			//var url="featureChecked.php";
			url=url+"/"+str+"/"+flag;
			//url=url+"&sid="+Math.random();
			//alert(url);
			xml_http_featureChecked.onreadystatechange=userChanged_featureChecked;
			xml_http_featureChecked.open("GET",url,true);
			xml_http_featureChecked.send(null);
		
	}
function userChanged_featureChecked()
	{
		if (xml_http_featureChecked.readyState==4)
		{
			 
			var str=xml_http_featureChecked.responseText;
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
