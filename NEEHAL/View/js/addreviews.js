		function isValid(){
			
			var valid = true;
			var customerid=document.forms["addingrev"]["customerid"].value;
			var coop=document.forms["addingrev"]["coop"].value;
			var coop2=document.forms["addingrev"]["coop2"].value;
			var behave=document.forms["addingrev"]["behave"].value;
			var behave2=document.forms["addingrev"]["behave2"].value;
			var rate=document.forms["addingrev"]["rate"].value;
			var rate2=document.forms["addingrev"]["rate2"].value;
			var feedback=document.forms["addingrev"]["feedback"].value;

			
			
			if(customerid==="")
			{
				valid = false;
				document.getElementById('customeridErr').innerHTML=" Field cannot be empty";
				
			}

			if(coop==="")
			{
				valid = false;
				document.getElementById('coopErr').innerHTML=" Field cannot be empty";
				
			}

			if(coop2==="")
			{
				valid = false;
				document.getElementById('coop2Err').innerHTML= " Field cannot be empty";
				
			}

			if(behave==="")
			{
				valid = false;
				document.getElementById('behaveErr').innerHTML=" Field cannot be empty";
				
			}

			if(behave2==="")
			{
				valid = false;
				document.getElementById('behave2Err').innerHTML=" Field cannot be empty";

			}

			if(rate==="")
			{
				valid = false;
				document.getElementById('rateErr').innerHTML=" Field cannot be empty";
			
			}

			if(rate2==="")
			{
				valid = false;
				document.getElementById('rate2Err').innerHTML=" Field cannot be empty";
				
			}

			if(feedback==="")
			{
				valid = false;
				document.getElementById('feedbackErr').innerHTML=" Field cannot be empty";
			
			}

			return valid;
		}
