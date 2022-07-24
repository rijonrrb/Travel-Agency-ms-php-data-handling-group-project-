function isValid()
{
	var valid = true;
	var touristname= document.forms["editTlist"]["touristname"].value;
	var touristid= document.forms["editTlist"]["touristid"].value;
	var touristmembers= document.forms["editTlist"]["touristmembers"].value;
	var visitingtime= document.forms["editTlist"]["visitingtime"].value;
	var duration= document.forms["editTlist"]["duration"].value;
	var phone= document.forms["editTlist"]["phone"].value;


	if(touristname === " ")
	{
		valid = false;
		document.getElementById('touristnameErr').innerHTML= "Field is empty";
	}

	if(touristid === " ")
	{
		valid = false;
		document.getElementById('touristidErr').innerHTML= "Field is empty";
	}

	if(touristmembers === " ")
	{
		valid = false;
		document.getElementById('touristmembersErr').innerHTML= "Field is empty";
	}

	if(visitingtime === " ")
	{
		valid = false;
		document.getElementById('visitingtimeErr').innerHTML= "Field is empty";
	}

	if(duration === " ")
	{
		valid = false;
		document.getElementById('durationErr').innerHTML= "Field is empty";
	}

	if(phone === " ")
	{
		valid = false;
		document.getElementById('phoneErr').innerHTML= "Field is empty";
	}
    
    return valid;

}
