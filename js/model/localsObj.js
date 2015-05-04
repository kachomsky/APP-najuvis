function localObj(){
	//Attributes
	this.id;
	this.address;
	this.state;
	this.entryDate;
	this.outDate;

	//methods
	this.construct = function(id, address, state, entryDate, outDate){
		this.setId(id);
		this.setAddress(address);
		this.setState(state);
		this.setEntryDate(entryDate);
		this.setOutDate(outDate);
	}

	//getters & setters
	this.getId = function(){return this.id};
	this.getAddress = function(){return this.address};
	this.getState = function(){return this.state};
	this.getEntryDate = function(){return this.entryDate};
	this.getOutDate = function(){return this.outDate};

	this.setId = function (id) {this.id=id;}
	this.setAddress = function (address) {this.address=address;}
	this.setState = function (state) {this.state=state;}
	this.setEntryDate = function (entryDate) {this.entryDate=entryDate;}
	this.setOutDate = function (outDate) {this.outDate=outDate;}

	this.arrayToString = function (arrayLocalObj)
	{
		var localString ="";
		$.each(arraylocalObj, function (index, local){
			localString+="local number "+(index+1)+":"+local.toString()+"\n";
		});
		return localString;
		
	}
	
	this.toString = function ()
	{
		var localString ="id="+this.getId()+" address="+this.getAddress()+" state="+this.getState();
		localString +=" entryDate="+this.getEntryDate()+" outDate="+this.getOutDate();
		
		return localString;		
	}

}