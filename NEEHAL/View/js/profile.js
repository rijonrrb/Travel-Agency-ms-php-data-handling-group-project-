		function isValid(){
			
			var valid = true;
			var fname=document.forms["profile"]["fname"].value;
			var lname=document.forms["profile"]["lname"].value;
			var phone=document.forms["profile"]["phone"].value;
			
			
			
			if(fname==="")
			{
				valid = false;
				document.getElementById('fnameErr').innerHTML=" Field cannot be empty";
				
			}

			if(lname==="")
			{
				valid = false;
				document.getElementById('lnameErr').innerHTML=" Field cannot be empty";
				
			}

			if(phone==="")
			{
				valid = false;
				document.getElementById('phoneErr').innerHTML= " Field cannot be empty";
				
			}

			
			return valid;
		}
