		function isValid(){
			
			var valid = true;
			var customerid=document.forms["adding"]["customerid"].value;
			var place1=document.forms["adding"]["place1"].value;
			var start=document.forms["adding"]["start"].value;
			var end=document.forms["adding"]["end"].value;
			var meal=document.forms["adding"]["meal"].value;
			var cuisine=document.forms["adding"]["cuisine"].value;
			var place2=document.forms["adding"]["place2"].value;
			var start1=document.forms["adding"]["start1"].value;
			var end1=document.forms["adding"]["end1"].value;
			var meal1=document.forms["adding"]["meal1"].value;
			var cuisine1=document.forms["adding"]["cuisine1"].value;
			var place3=document.forms["adding"]["place3"].value;
			var start2=document.forms["adding"]["start2"].value;
			var end2=document.forms["adding"]["end2"].value;
			var meal2=document.forms["adding"]["meal2"].value;
			var cuisine2=document.forms["adding"]["cuisine2"].value;
			
			
			if(customerid==="")
			{
				valid = false;
				document.getElementById('customeridErr').innerHTML=" Field cannot be empty";
				
			}

			if(place1==="")
			{
				valid = false;
				document.getElementById('place1Err').innerHTML=" Field cannot be empty";
				
			}

			if(start==="")
			{
				valid = false;
				document.getElementById('startErr').innerHTML= " Field cannot be empty";
				
			}

			if(end==="")
			{
				valid = false;
				document.getElementById('endErr').innerHTML=" Field cannot be empty";
				
			}

			if(meal==="")
			{
				valid = false;
				document.getElementById('mealErr').innerHTML=" Field cannot be empty";

			}

			if(cuisine==="")
			{
				valid = false;
				document.getElementById('cuisineErr').innerHTML=" Field cannot be empty";
			
			}

			if(place2==="")
			{
				valid = false;
				document.getElementById('place2Err').innerHTML=" Field cannot be empty";
				
			}

			if(start1==="")
			{
				valid = false;
				document.getElementById('start1Err').innerHTML=" Field cannot be empty";
			
			}

			if(end1==="")
			{
				valid = false;
				document.getElementById('end1Err').innerHTML=" Field cannot be empty";
			
			}

			if(meal1==="")
			{
				valid = false;
				document.getElementById('meal1Err').innerHTML=" Field cannot be empty";
			
			}

			if(cuisine1==="")
			{
				valid = false;
				document.getElementById('cuisine1Err').innerHTML=" Field cannot be empty";
			
			}

			if(place3==="")
			{
				valid = false;
				document.getElementById('place3Err').innerHTML=" Field cannot be empty";
				
			}

			if(start2==="")
			{
				valid = false;
				document.getElementById('start2Err').innerHTML=" Field cannot be empty";
			
			}

			if(end2==="")
			{
				valid = false;
				document.getElementById('end2Err').innerHTML=" Field cannot be empty";
			
			}

			if(meal2==="")
			{
				valid = false;
				document.getElementById('meal2Err').innerHTML=" Field cannot be empty";
			
			}

			if(cuisine2==="")
			{
				valid = false;
				document.getElementById('cuisine2Err').innerHTML=" Field cannot be empty";
				
			}
			return valid;
		}
