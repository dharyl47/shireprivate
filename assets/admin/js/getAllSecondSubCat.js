var xml_http_getAllSecondSubCat;
	function getAllSecondSubCat(str)
	{
		if(str!='')
		{
			xml_http_getAllSecondSubCat=GetXmlHttpObject();
			if (xml_http_getAllSecondSubCat==null)
			{
			  alert ("Browser does not support HTTP Request");
			  return;
			}
			var site_url=get_admin_url();
			var res = str.replace("&", "and");
			var url=site_url+"product/getAllSecondSubCatNameById/"+res;
			//url=url+"?name="+res;
			//url=url+"&sid="+Math.random();
			//alert(url);
			xml_http_getAllSecondSubCat.onreadystatechange=userChanged_getAllSecondSubCat;
			xml_http_getAllSecondSubCat.open("GET",url,true);
			xml_http_getAllSecondSubCat.send(null);
		}
	}
function userChanged_getAllSecondSubCat()
	{
		if (xml_http_getAllSecondSubCat.readyState==4)
		{
			var check=xml_http_getAllSecondSubCat.responseText;
			//alert(check);
			document.getElementById("second_lvl_sub_cat_span").innerHTML=check;
			
			
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
