var xml_http_DeleteProductImage;
	function DeleteProductImage(str)
	{
		
			xml_http_DeleteProductImage=GetXmlHttpObject();
			if (xml_http_DeleteProductImage==null)
			{
			  alert ("Browser does not support HTTP Request");
			  return;
			}
			
			var r = confirm("Are you sure you want to delete?");
    		if (r == true) 
			{
				var site_url=get_admin_url();
				var url=site_url+"product/deleteProductImage/"+str;
				
				//alert(url);
				
				xml_http_DeleteProductImage.onreadystatechange=userChanged_DeleteProductImage;
				xml_http_DeleteProductImage.open("GET",url,true);
				xml_http_DeleteProductImage.send(null);
			} 
			else 
			{
        		return false;
    		}
		
	}
function userChanged_DeleteProductImage()
	{
		if (xml_http_DeleteProductImage.readyState==4)
		{
			var id=xml_http_DeleteProductImage.responseText;
			var id = id.trim(); 
			//alert("prd_image_"+id);
			
			document.getElementById("prd_image_"+id).style.display="none";
			document.getElementById("prd_image_"+id).style.visibility="hidden";
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
