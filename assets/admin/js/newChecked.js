var xml_http_newChecked;
	function newChecked(str)
	{
		   document.getElementById("newChkLoading"+str).style.visibility="visible";
		
			var chk=document.getElementById("newChk"+str).checked;
			if(chk==true)
			{
			  var flag=1;	
			}
			else
			{
				var flag=0;
			}
			//alert(flag);
			xml_http_newChecked=GetXmlHttpObject();
			if (xml_http_newChecked==null)
			{
			  alert ("Browser does not support HTTP Request");
			  return;
			}
			var site_url=get_admin_url();
			var url=site_url+"product/newChecked";
			//var url="newChecked.php";
			url=url+"/"+str+"/"+flag;
			//url=url+"&sid="+Math.random();
			//alert(url);
			xml_http_newChecked.onreadystatechange=userChanged_newChecked;
			xml_http_newChecked.open("GET",url,true);
			xml_http_newChecked.send(null);
		
	}
function userChanged_newChecked()
	{
		if (xml_http_newChecked.readyState==4)
		{
			 
			var str=xml_http_newChecked.responseText;
			//alert(str);
			document.getElementById("newChkLoading"+str).style.visibility="hidden";
			
			
			
			
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
