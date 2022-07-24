function validation(val){
	var name = val.name.value;
	var category = val.category.value;
	var duration = val.duration.value;
	var price = val.price.value;
	var flag = true;


	if(name===""){
		document.getElementById('nameError').innerHTML="Field can't be empty";
		flag = false;
	}
	if(category===""){
		document.getElementById('categoryError').innerHTML="Field can't be empty";
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
		fd.append("name",pform.name.value);
		fd.append("category",pform.category.value);
		fd.append("duration",pform.duration.value);
		fd.append("price",pform.price.value);
		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("msg").innerHTML = this.responseText;
			}
		}
		xhttp.open("POST","../RASHEDUL/controller/addUmraAction.php");
		//xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		//xhttp.send("fname="+pform.fname.value+"&lname="+pform.lname.value+"&gender="+pform.gender.value+"&dob="+pform.dob.value+"&religion="+pform.religion.value+"&praddress="+pform.praddress.value+"&peaddress="+pform.peaddress.value+"&phoneNumber="+pform.phoneNumber.value+"&mail="+pform.mail.value+"&userName="+pform.userName.value+"&password="+pform.password.value+"&image="+pform.image.value);
		xhttp.send(fd);
	}
	
}
