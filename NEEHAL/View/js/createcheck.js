		function isValid(){
			
			var valid = true;
			var customerid=document.forms["createchecklist"]["customerid"].value;
			var scheduledplace=document.forms["createchecklist"]["scheduledplace"].value;
			var scheduledtime=document.forms["createchecklist"]["scheduledtime"].value;
			var recommendedtrans=document.forms["createchecklist"]["recommendedtrans"].value;
			var customernumber=document.forms["createchecklist"]["customernumber"].value;
			var recommendedcuisine=document.forms["createchecklist"]["recommendedcuisine"].value;
			var spot1=document.forms["createchecklist"]["spot1"].value;
			var spot2=document.forms["createchecklist"]["spot2"].value;
			var spot3=document.forms["createchecklist"]["spot3"].value;
			
			
			
			if(customerid==="")
			{
				valid = false;
				document.getElementById('customeridErr').innerHTML=" Field cannot be empty";
				
			}

			if(scheduledplace==="")
			{
				valid = false;
				document.getElementById('scheduledplaceErr').innerHTML=" Field cannot be empty";
				
			}

			if(scheduledtime==="")
			{
				valid = false;
				document.getElementById('scheduledtimeErr').innerHTML= " Field cannot be empty";
				
			}

			if(recommendedtrans==="")
			{
				valid = false;
				document.getElementById('recommendedtransErr').innerHTML=" Field cannot be empty";
				
			}

			if(customernumber==="")
			{
				valid = false;
				document.getElementById('customernumberErr').innerHTML=" Field cannot be empty";

			}

			if(recommendedcuisine==="")
			{
				valid = false;
				document.getElementById('recommendedcuisineErr').innerHTML=" Field cannot be empty";
			
			}

			if(spot1==="")
			{
				valid = false;
				document.getElementById('spot1Err').innerHTML=" Field cannot be empty";
				
			}

			if(spot2==="")
			{
				valid = false;
				document.getElementById('spot2Err').innerHTML=" Field cannot be empty";
			
			}

			if(spot3==="")
			{
				valid = false;
				document.getElementById('spot3Err').innerHTML=" Field cannot be empty";
			
			}

			
			return valid;
		}
