function validation(val){
	var id = val.id.value;
	var duration = val.duration.value;
	var price = val.price.value;
	var flag = true;


	if(id===""){
		document.getElementById('idError').innerHTML="Field can't be empty";
		flag = false;
	}
	if(duration===""){
		document.getElementById('durationError').innerHTML="Field can't be empty";
		flag = false;
	}
	if(price===""){
		document.getElementById('priceError').innerHTML="Field can't be empty";
		flag = false;
	}

	return flag;
}

function ajax(pform) {
	// body...
	var isValid=validation(pform);
	if(isValid){
		var fd = new FormData();
		fd.append("id",pform.id.value);
		fd.append("duration",pform.duration.value);
		fd.append("price",pform.price.value);
		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("msg").innerHTML = this.responseText;
			}
		}
		xhttp.open("POST","../RASHEDUL/controller/updatePackageAction.php");
		//xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		//xhttp.send("fname="+pform.fname.value+"&lname="+pform.lname.value+"&gender="+pform.gender.value+"&dob="+pform.dob.value+"&religion="+pform.religion.value+"&praddress="+pform.praddress.value+"&peaddress="+pform.peaddress.value+"&phoneNumber="+pform.phoneNumber.value+"&mail="+pform.mail.value+"&userName="+pform.userName.value+"&password="+pform.password.value+"&image="+pform.image.value);
		xhttp.send(fd);
	}
	
}
