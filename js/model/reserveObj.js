function reserveObj(){
	//Attributes
	this.id;
	this.date;
	this.idClient;

	//methods
	this.construct = function(id, date, idClient){
		this.setId(id);
		this.setDate(date);
		this.setIdClient(idClient);
	}

	//getters & setters
	this.getId = function(){return this.id};
	this.getDate = function(){return this.date};
	this.getIdClient = function(){return this.idClient};

	this.setId = function (id) {this.id=id;}
	this.setDate = function (date) {this.date=date;}
	this.setIdClient = function (idClient) {this.idClient=idClient;}

	this.arrayToString = function (arrayReserveObj)
	{
		var reserveString ="";
		$.each(arrayreserveObj, function (index, reserve){
			reserveString+="reserve number "+(index+1)+":"+reserve.toString()+"\n";
		});
		return reserveString;
		
	}
	
	this.toString = function ()
	{
		var reserveString ="id="+this.getId()+" date="+this.getDate()+" idClient="+this.getIdClient();
		
		return reserveString;		
	}

}