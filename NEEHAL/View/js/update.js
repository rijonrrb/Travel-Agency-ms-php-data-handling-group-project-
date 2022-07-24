		function isValid(val){
			
			var valid = true;
			var customerid=val.customerid.value;
			var place1=val.place1.value;
			var start=val.start.value;
			var end=val.end.value;
			var meal=val.meal.value;
			var cuisine=val.cuisine.value;
			var place2=val.place2.value;
			var start1=val.start1.value;
			var end1=val.end1.value;
			var meal1=val.meal1.value;
			var cuisine1=val.cuisine1.value;
			var place3=val.place3.value;
			var start2=val.start2.value;
			var end2=val.end2.value;
			var meal2=val.meal2.value;
			var cuisine2=val.cuisine2.value;
			

			
			
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

		
        function add(pform) {
        var valid=isValid(pform);
        if(valid){
        var data = new FormData();
        data.append("customerid",pform.customerid.value);
        data.append("day1",pform.day1.value);
        data.append("place1",pform.place1.value);
        data.append("start",pform.start.value);
        data.append("end",pform.end.value);
        data.append("meal",pform.meal.value);
        data.append("cuisine",pform.cuisine.value);
        data.append("place2",pform.place2.value);
        data.append("day2",pform.day2.value);
        data.append("start1",pform.start1.value);
        data.append("end1",pform.end1.value);
        data.append("meal1",pform.meal1.value);
        data.append("cuisine1",pform.cuisine1.value);
        data.append("place3",pform.place3.value);
        data.append("day3",pform.day3.value);
        data.append("start2",pform.start2.value);
        data.append("end2",pform.end2.value);
        data.append("meal2",pform.meal2.value);
        data.append("cuisine2",pform.cuisine2.value);
              
        var xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
        
        if (this.status===200) {
            document.getElementById("updateajax").innerHTML = this.responseText;
        }
        }
        
        xhttp.open("POST","../NEEHAL/Controller/updateAjax.php");
        xhttp.send(data);


    }
    
}