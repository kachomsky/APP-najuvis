function reserveObj(){
	//Attributes
	this.id;
	this.date;
	this.entryTime;
	this.outTime;
	this.idClient;

	//methods
	this.construct = function(id, date, entryTime, outTime, idClient){
		this.setId(id);
		this.setDate(date);
		this.setEntryTime(entryTime);
		this.setOutTime(outTime);
		this.setIdClient(idClient);
	}

	//getters & setters
	this.getId = function(){return this.id};
	this.getDate = function(){return this.date};
	this.getEntryTime = function(){return this.EntryTime};
	this.getOutTime = function(){return this.OutTime};
	this.getIdClient = function(){return this.idClient};


	this.setId = function (id) {this.id=id;}
	this.setDate = function (date) {this.date=date;}
	this.setEntryTime = function (entryTime) {this.entryTime=entryTime;}
	this.setOutTime = function (outTime) {this.outTime=outTime;}
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
		var reserveString ="id="+this.getId()+" date="+this.getDate()+" idClient="+this.getIdClient()+" entryTime="+this.getEntryTime()+" outTime="+this.getOutTime();
		
		return reserveString;		
	}

}