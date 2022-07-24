		function isValid(){
			
			var valid = true;
			var Properties=document.forms["adding"]["Properties"].value;
			var Properties2=document.forms["adding"]["Properties2"].value;
			var Properties3=document.forms["adding"]["Properties3"].value;
			
			
			
			if(Properties==="")
			{
				valid = false;
				document.getElementById('PropertiesErr').innerHTML=" Field cannot be empty";
				
			}
			if(Properties2==="")
			{
				valid = false;
				document.getElementById('Properties2Err').innerHTML=" Field cannot be empty";
				
			}
			if(Properties3==="")
			{
				valid = false;
				document.getElementById('Properties3Err').innerHTML=" Field cannot be empty";
				
			}
			return valid;
		}
