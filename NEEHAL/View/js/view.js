		function isValid(){
			
			var valid = true;
			var customerid=document.forms["view"]["customerid"].value;
			
			
			
			if(customerid==="")
			{
				valid = false;
				document.getElementById('customeridErr').innerHTML=" Field cannot be empty!";
				
			}

			return valid;
		}
