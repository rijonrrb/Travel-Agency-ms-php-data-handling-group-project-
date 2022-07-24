function ajax(pform) {

		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("msg").innerHTML = this.responseText;
			}
		}
		xhttp.open("GET",pform.action + "?id=" + pform.id.value,true);
		//xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xhttp.send();
		
	}
	

