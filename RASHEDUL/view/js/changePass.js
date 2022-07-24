function validation(val){
	var prepass = val.prepass.value;
	var postpass = val.postpass.value;
	var confirmpass = val.confirmpass.value;
	var flag = true;


	if(prepass===""){
		document.getElementById('prepassError').innerHTML="Field can't be empty";
		flag = false;
	}
	if(postpass===""){
		document.getElementById('postpassError').innerHTML="Field can't be empty";
		flag = false;
	}

	if(confirmpass===""){
		document.getElementById('confirmpassError').innerHTML="Field can't be empty";
		flag = false;
	}
	if(postpass!==confirmpass){
		document.getElementById('postpass').innerHTML="Password doesn't match";
		document.getElementById('confirmpass').innerHTML="Password doesn't match";
		flag = false;
	}
	


	return flag;
}

function ajax(pform) {
	// body...
	var isValid=validation(pform);
	if(isValid){
		var fd = new FormData();
		fd.append("prepass",pform.prepass.value);
		fd.append("postpass",pform.postpass.value);
		fd.append("confirmpass",pform.postpass.value);
		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("msg").innerHTML = this.responseText;
			}
		}
		xhttp.open("POST","../RASHEDUL/controller/change_passAction.php");
		//xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		//xhttp.send("fname="+pform.fname.value+"&lname="+pform.lname.value+"&gender="+pform.gender.value+"&dob="+pform.dob.value+"&religion="+pform.religion.value+"&praddress="+pform.praddress.value+"&peaddress="+pform.peaddress.value+"&phoneNumber="+pform.phoneNumber.value+"&mail="+pform.mail.value+"&userName="+pform.userName.value+"&password="+pform.password.value+"&image="+pform.image.value);
		xhttp.send(fd);
	}
	
}
