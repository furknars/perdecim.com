function ePostaKont(eposta)
    {
         var duzenli = new RegExp(/^[a-z]{1}[\d\w\.-]+@[\d\w-]{3,}\.[\w]{2,3}(\.\w{2})?$/);
    
         return duzenli.test(eposta);
    }
	
	function isNumber(evt) 
	{
    	var charCode = evt.keyCode;
    	if (charCode > 31 && (charCode < 48 || charCode > 57)) 
   		{
        	return false;
    	}
    	return true;
    }

	function kontrol() 
	{
    	if (document.getElementById("tel").value!="" && document.getElementById("email").value!=""  && document.getElementById("konu").value!="" && document.getElementById("aciklama").value!="")
		{
			var str = document.getElementById("email").value;
    	  

    		if (ePostaKont(str)) 
    		{ 
    			
                return true;
    		}
    		else
    		{
    			alert("Mail Formatınız Doğru Değil");
                return false;
    		}
			
		}
		else
		{
			alert("Boş Alanları Doldurunuz");
                return false;
		}
	}

   
   