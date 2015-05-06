function productObj(){
	//Attributes
	this.id;
	this.type;
	this.name;
	this.price;
	this.description;
	this.image;

	//methods
	this.construct = function(id, type, name, price, description,image){
		this.setId(id);
		this.setType(type);
		this.setName(name);
		this.setPrice(price);
		this.setDescription(description);
		this.setImage(image);
	}

	//getters & setters
	this.getId = function(){return this.id;}
	this.getType = function(){return this.type;}
	this.getName = function(){return this.name;}
	this.getPrice = function(){return this.price;}
	this.getDescription = function(){return this.description;}
	this.getImage = function(){return this.image;}

	this.setId = function (id) {this.id=id;}
	this.setType = function (type) {this.type=type;}
	this.setName = function (name) {this.name=name;}
	this.setPrice = function (price) {this.price=price;}
	this.setDescription = function (description) {this.description=description;}
	this.setImage = function (image) {this.image=image;}

	this.arrayToString = function (arrayProductObj)
	{
		var productString ="";
		$.each(arrayproductObj, function (index, product){
			productString+="product number "+(index+1)+":"+product.toString()+"\n";
		});
		return productString;
		
	}
	
	this.toString = function ()
	{
		var productString ="id="+this.getId()+" type="+this.getType()+" name="+this.getName();
		productString +=" price="+this.getPrice()+" description="+this.getDescription()+" image="+this.getImage();
		
		return productString;		
	}

}