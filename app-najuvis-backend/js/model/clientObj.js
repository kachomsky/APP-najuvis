function clientObj(){
	//Attributes
	this.id;
	this.email;
	this.name;
	this.surname1;
	this.surname2;
	this.dni;
	this.address;
	this.entryDate;

	//methods
	this.construct = function(id, email, name, surname1, surname2, dni,address,entryDate){
		this.setId(id);
		this.setEmail(email);
		this.setName(name);
		this.setSurname1(surname1);
		this.setSurname2(surname2);
		this.setDni(dni);
		this.setAddress(address);
		this.setEntryDate(entryDate);
	}

	//getters & setters
	this.getId = function(){return this.id;}
	this.getEmail = function(){return this.email;}
	this.getName = function(){return this.name;}
	this.getSurname1 = function(){return this.surname1;}
	this.getSurname2 = function(){return this.surname2;}
	this.getDni = function(){return this.dni;}
	this.getAddress = function(){ return this.address; }
	this.getEntryDate = function(){ return this.entryDate; }

	this.setId = function (id) {this.id=id;}
	this.setEmail = function (email) {this.email=email;}
	this.setName = function (name) {this.name=name;}
	this.setSurname1 = function (surname1) {this.surname1=surname1;}
	this.setSurname2 = function (surname2) {this.surname2=surname2;}
	this.setDni = function (dni) {this.dni=dni;}
	this.setAddress = function(address) {this.address= address;}
	this.setEntryDate = function(entryDate) { this.entryDate=entryDate;}

	this.arrayToString = function (arrayClientObj)
	{
		var clientString ="";
		$.each(arrayClientObj, function (index, client){
			clientString+="client number "+(index+1)+":"+client.toString()+"\n";
		});
		return clientString;
		
	}
	
	this.toString = function ()
	{
		var clientString ="id="+this.getId()+" email="+this.getEmail()+" name="+this.getName();
		clientString +=" surname1="+this.getSurname1()+" surname2="+this.getSurname2()+" dni="+this.getDni()+" address="+this.getAddress()+" entryDate="this.getEntryDate();
		
		return clientString;		
	}

}