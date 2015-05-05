function localObj(){
	//Attributes
	this.id;
	this.address;
	this.state; //Variable to indicate local's availability

	//methods
	this.construct = function(id, address, state){
		this.setId(id);
		this.setAddress(address);
		this.setState(state);
	}

	//getters & setters
	this.getId = function(){return this.id};
	this.getAddress = function(){return this.address};
	this.getState = function(){return this.state};

	this.setId = function (id) {this.id=id;}
	this.setAddress = function (address) {this.address=address;}
	this.setState = function (state) {this.state=state;}

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
		
		return localString;		
	}

}