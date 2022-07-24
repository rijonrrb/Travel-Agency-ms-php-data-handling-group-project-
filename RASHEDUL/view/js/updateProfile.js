function validation(val){
	var fname = val.fname.value;
	var lname = val.lname.value;
	var phone = val.phone.value;
	var email = val.email.value;
	var flag = true;


	if(fname===""){
		document.getElementById('fnameError').innerHTML="Field can't be empty";
		flag = false;
	}
	if(lname===""){
		document.getElementById('lnameError').innerHTML="Field can't be empty";
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
	


	return flag;
}

function ajax(pform) {
	// body...
	var isValid=validation(pform);
	if(isValid){
		var fd = new FormData();
		fd.append("fname",pform.fname.value);
		fd.append("lname",pform.lname.value);
		fd.append("phone",pform.phone.value);
		fd.append("email",pform.email.value);
		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("msg").innerHTML = this.responseText;
			}
		}
		xhttp.open("POST","../RASHEDUL/controller/updateProfileAction.php");
		//xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		//xhttp.send("fname="+pform.fname.value+"&lname="+pform.lname.value+"&gender="+pform.gender.value+"&dob="+pform.dob.value+"&religion="+pform.religion.value+"&praddress="+pform.praddress.value+"&peaddress="+pform.peaddress.value+"&phoneNumber="+pform.phoneNumber.value+"&mail="+pform.mail.value+"&userName="+pform.userName.value+"&password="+pform.password.value+"&image="+pform.image.value);
		xhttp.send(fd);
	}
	
}
