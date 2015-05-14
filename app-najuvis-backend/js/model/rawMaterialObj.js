function rawMaterialObj(){
	//,Attributes
	this.id;
	this.productName;
	this.quantity;
	
	//methods
	this.construct = function(id,productName,quantity){
		this.setId(id);
		this.setProductName(productName);
		this.setQuantity(quantity);
	}
	
	//getters and setters
	this.getId = function(){return this.id;}
	this.getProductName = function(){return this.productName;}
	this.getQuantity = function() {return this.quantity; }
	
	this.setId = function(id){ this.id = id; }
	this.setProductName = function(productName){ this.productName = productName; }
	this.setQuantity = function(quantity) { this.quantity = quantity;}
	
	this.arrayToString = function (arrayUserObj)
	{
		var rawMaterialString ="";
		$.each(arrayuserObj, function (index, rawMaterial){
			rawMaterialString+="rawMaterial number "+(index+1)+":"+rawMaterial.toString()+"\n";
		});
		return rawMaterialString;
		
	}
	
	this.toString = function ()
	{
		var rawMaterialString ="id="+this.getId()+" nick="+this.getNick()+" password="+this.getPassword()+" state="+this.getState();
		
		return rawMaterialString;		
	}
}