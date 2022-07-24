function validation(val){
	var fname = val.fname.value;
	var lname = val.lname.value;
	if(val.male.checked===true){
		var gender = val.male.value
	}
	else if(val.female.checked===true){
		var gender= val.female.value;
	}
	var dob = val.dob.value;
	var religion = val.religion.value;
	var praddress = val.praddress.value;
	var peaddress = val.peaddress.value;
	var phone = val.phoneNumber.value;
	var mail = val.mail.value;
	var userName = val.userName.value;
	var password = val.password.value;
	var image = val.image.value;
	var flag = true;
	if(fname==="")
	{
	   document.getElementById('fnameError').innerHTML="Field can't be empty";
		flag = false;
	}
	if(lname==="")
	{
		document.getElementById('lnameError').innerHTML="Field can't be empty";
		flag = false;
	}
	if(gender==="")
	{
		document.getElementById('genderError').innerHTML="field can't be empty";
		flag = false;
	}
	if(dob==="")
	{
		document.getElementById('dobError').innerHTML="field can't be empty";
		flag = false;
	}
	if(religion==="")
	{
		document.getElementById('religionError').innerHTML="field can't be empty";
		flag = false;
	}
	if(praddress==="")
	{
		document.getElementById('praddressError').innerHTML="field can't be empty";
		flag = false;
	}
	if(peaddress==="")
	{
		document.getElementById('peaddressError').innerHTML="field can't be empty";
		flag = false;
	}
	if(phoneNumber==="")
	{
		document.getElementById('phoneNumberError').innerHTML="field can't be empty";
		flag = false;
	}
	if(mail==="")
	{
		document.getElementById('mailError').innerHTML="field can't be empty";
		flag = false;
	}
	if(userName==="")
	{
		document.getElementById('userNameError').innerHTML="field can't be empty";
		flag = false;
	}
	if(password==="")
	{
		document.getElementById('passwordError').innerHTML="field can't be empty";
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
		fd.append("gender",pform.gender.value);
		fd.append("dob",pform.dob.value);
		fd.append("religion",pform.religion.value);
		fd.append("praddress",pform.praddress.value);
		fd.append("peaddress",pform.peaddress.value);
		fd.append("phoneNumber",pform.phoneNumber.value);
		fd.append("mail",pform.mail.value);
		fd.append("userName",pform.userName.value);
		fd.append("password",pform.password.value);
		fd.append("image",pform.image.files[0]);
		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("msg").innerHTML = this.responseText;
			}
		}
		xhttp.open("POST","../RASHEDUL/controller/registrationAction.php");
		//xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		//xhttp.send("fname="+pform.fname.value+"&lname="+pform.lname.value+"&gender="+pform.gender.value+"&dob="+pform.dob.value+"&religion="+pform.religion.value+"&praddress="+pform.praddress.value+"&peaddress="+pform.peaddress.value+"&phoneNumber="+pform.phoneNumber.value+"&mail="+pform.mail.value+"&userName="+pform.userName.value+"&password="+pform.password.value+"&image="+pform.image.value);
		xhttp.send(fd);
	}
	
}
