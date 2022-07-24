		function isValid(){
			
			var valid = true;
			var review=document.forms["adding"]["review"].value;
			var rating=document.forms["adding"]["rating"].value;
			
			
			if(review==="")
			{
				valid = false;
				document.getElementById('reviewErr').innerHTML=" Field cannot be empty";
				
			}

			if(rating==="")
			{
				valid = false;
				document.getElementById('ratingErr').innerHTML=" Field cannot be empty";
				
			}

			
			return valid;
		}
