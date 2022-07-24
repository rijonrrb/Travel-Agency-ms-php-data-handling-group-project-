function validation(val){
	var address = val.address.value;
	var phone = val.phone.value;
	var email = val.email.value;
	var web = val.web.value;
	var ytube = val.ytube.value;
	var fb = val.fb.value;
	var flag = true;


	if(address===""){
		document.getElementById('addressError').innerHTML="Field can't be empty";
		flag = false;
	}
	if(phone===""){
		document.getElementById('phoneError').innerHTML="Field can't be empty";
		flag = false;
	}
	if(email===""){
		document.getElementById('emailError').innerHTML="Field can't be empty";
		flag = false;
	}

	if(web===""){
		document.getElementById('webError').innerHTML="Field can't be empty";
		flag = false;
	}
if(ytube===""){
		document.getElementById('ytubeError').innerHTML="Field can't be empty";
		flag = false;
	}
	if(fb===""){
		document.getElementById('fbError').innerHTML="Field can't be empty";
		flag = false;
	}


	


	return flag;
}

function ajax(pform) {
	// body...
	var isValid=validation(pform);
	if(isValid){
		var fd = new FormData();
		fd.append("address",pform.address.value);
		fd.append("phone",pform.phone.value);
		fd.append("email",pform.email.value);
		fd.append("web",pform.web.value);
		fd.append("ytube",pform.ytube.value);
		fd.append("fb",pform.fb.value);
		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("msg").innerHTML = this.responseText;
			}
		}
		xhttp.open("POST","../RASHEDUL/controller/updateContactAction.php");
		//xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		//xhttp.send("fname="+pform.fname.value+"&lname="+pform.lname.value+"&gender="+pform.gender.value+"&dob="+pform.dob.value+"&religion="+pform.religion.value+"&praddress="+pform.praddress.value+"&peaddress="+pform.peaddress.value+"&phoneNumber="+pform.phoneNumber.value+"&mail="+pform.mail.value+"&userName="+pform.userName.value+"&password="+pform.password.value+"&image="+pform.image.value);
		xhttp.send(fd);
	}
	
}
