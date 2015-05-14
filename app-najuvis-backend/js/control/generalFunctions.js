function showErrors(errors)
{
	var error = "";
	
	for (var i = 0; i < errors.length; i++)
	{
		error+=errors[i]+"\n";
	}
	
	alert(error);
}
