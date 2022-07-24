	
		function isValid(val){
			
			var valid = true;
			var touristname=val.touristname.value;
			var touristid=val.touristid.value;
			var touristmembers=val.touristmembers.value;
			var visitingtime=val.visitingtime.value;
			var duration=val.duration.value;
			var phone=val.phone.value;
			
			
			
			if(touristname==="")
			{
				valid = false;
				document.getElementById('touristnameErr').innerHTML="Field is empty!";
				
			}

			if(touristid==="")
			{
				valid = false;
				document.getElementById('touristidErr').innerHTML=" Field is empty!";
				
			}

			if(touristmembers==="")
			{
				valid = false;
				document.getElementById('touristmembersErr').innerHTML= " Field is empty!";
				
			}

			if(visitingtime==="")
			{
				valid = false;
				document.getElementById('visitingtimeErr').innerHTML="Field is empty!";
				
			}

			if(duration==="")
			{
				valid = false;
				document.getElementById('durationErr').innerHTML=" Field is empty!";

			}

			if(phone==="")
			{
				valid = false;
				document.getElementById('phoneErr').innerHTML=" Field is empty!";
			
			}

			
			return valid;
		}


    function add(pform) {
        var valid=isValid(pform);
        if(valid){
        var data = new FormData();
        data.append("touristname",pform.touristname.value);
        data.append("touristid",pform.touristid.value);
        data.append("touristmembers",pform.touristmembers.value);
        data.append("visitingtime",pform.visitingtime.value);
        data.append("duration",pform.duration.value);
        data.append("phone",pform.phone.value);
        
        var xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
        
        if (this.status===200) {
            document.getElementById("createTLajax").innerHTML = this.responseText;
        }
        }
        
        xhttp.open("POST","../NEEHAL/Controller/createtouristlistAjax.php");
        xhttp.send(data);


    }
    
}





