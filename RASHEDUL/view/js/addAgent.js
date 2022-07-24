function ajax(pform) {
	// body...
	var isValid=validation(pform);
	if(isValid){
		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("msg").innerHTML = this.responseText;
			}
		}
		xhttp.open("GET",pform.action + "?convertion="+pform.convertion.value,true);
		xhttp.send();
	}
	
}
function validation(val){
	var id = val.id.value;
	var flag = true;
	if(id==="")
	{
	   document.getElementById('idError').innerHTML="id can't be empty";
		flag = false;
	}
	return flag;
}