function cakeDesignObj(){
	//Atributes
	this.id;
	this.size;
	this.description;
	this.idOrder;
	
	//methods
	this.construct = function(id,size,description,idOrder){
		this.setId(id);
		this.setSize(size);
		this.setDescription(description);
		this.setidOrder(idOrder);
	}
	
	//getters and setters
	this.getId = function(){return this.id;}
	this.getSize = function(){return this.size;}
	this.getDescription = function(){return this.description;}
	this.getIdOrder = function(){return this.idOrder;}
	
	this.setId = function(id){this.id = id; }
	this.setSize = function(size){ this.size = size; }
	this.setDescription = function(description){ this.description = description; }
	this.setIdOrder = function(idOrder){this.idOrder = idOrder; }
	
	this.arrayToString = function (arrayUserObj)
	{
		var cakeDesignString ="";
		$.each(arrayuserObj, function (index, cake){
			cakeDesignString+="cake number "+(index+1)+":"+cake.toString()+"\n";
		});
		return cakeDesignString;
		
	}
	
	this.toString = function ()
	{
		var cakeDesignString ="id="+this.getId()+" size="+this.getSize()+" description="+this.getDescription()+" idOrder="+this.getIdOrder();
		
		return cakeDesignString;		
	}
}