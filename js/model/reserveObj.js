function reserveObj(){
	//Attributes
	this.id;
	this.date;
	this.entryDate;
	this.outDate;
	this.idClient;

	//methods
	this.construct = function(id, date, entryDate, outDate, idClient){
		this.setId(id);
		this.setDate(date);
		this.setEntryDate(entryDate);
		this.setOutDate(outDate);
		this.setIdClient(idClient);
	}

	//getters & setters
	this.getId = function(){return this.id};
	this.getDate = function(){return this.date};
	this.getEntryDate = function(){return this.EntryDate};
	this.getOutDate = function(){return this.OutDate};
	this.getIdClient = function(){return this.idClient};


	this.setId = function (id) {this.id=id;}
	this.setDate = function (date) {this.date=date;}
	this.setEntryDate = function (entryDate) {this.entryDate=entryDate;}
	this.setOutDate = function (outDate) {this.outDate=outDate;}
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
		var reserveString ="id="+this.getId()+" date="+this.getDate()+" idClient="+this.getIdClient()+" entryDate="+this.getEntryDate()+" outDate="+this.getOutDate();
		
		return reserveString;		
	}

}