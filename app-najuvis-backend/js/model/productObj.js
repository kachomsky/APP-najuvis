function productObj(){
	//Attributes
	this.id;
	this.type;
	this.name;
	this.price;
	this.description;
	this.image;
	this.size;

	//methods
	this.construct = function(id, type, name, price, description,image, size){
		this.setId(id);
		this.setType(type);
		this.setName(name);
		this.setPrice(price);
		this.setDescription(description);
		this.setImage(image);
		this.setSize(size);
	}

	//getters & setters
	this.getId = function(){return this.id;}
	this.getType = function(){return this.type;}
	this.getName = function(){return this.name;}
	this.getPrice = function(){return this.price;}
	this.getDescription = function(){return this.description;}
	this.getImage = function(){return this.image;}
	this.getSize = function(){return this.size;}

	this.setId = function (id) {this.id=id;}
	this.setType = function (type) {this.type=type;}
	this.setName = function (name) {this.name=name;}
	this.setPrice = function (price) {this.price=price;}
	this.setDescription = function (description) {this.description=description;}
	this.setImage = function (image) {this.image=image;}
	this.setSize = function (size) {this.size=size;}

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
		productString +=" price="+this.getPrice()+" description="+this.getDescription()+" image="+this.getImage()+" size="+this.getSize();
		
		return productString;		
	}

	this.cookieToObj = function (cookieString)
	{
		var filedsArray = cookieString.split(":");
		this.construct (filedsArray[0].split("=")[1],filedsArray[1].split("=")[1],filedsArray[2].split("=")[1],filedsArray[3].split("=")[1],filedsArray[4].split("=")[1],filedsArray[1].split("=")[5],filedsArray[1].split("=")[6]);
	}

	this.toCookie = function ()
	{
		var cookieString ="id="+this.getId()+":type="+this.getType()+":name="+this.getName();
		cookieString +=":price="+this.getPrice()+":description="+this.getDescription()+":image="+this.getImage()+":size="+this.getSize();
		
		return cookieString;		
	}

}