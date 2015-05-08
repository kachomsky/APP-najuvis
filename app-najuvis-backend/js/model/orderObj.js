function orderObj(){
	//Attributes
	this.id;
	this.idClient;
	this.idProduct;
	this.orderNumber;
	this.date;
	this.quantity;

	//methods
	this.construct = function(id, idClient, idProduct, orderNumber, date, quantity){
		this.setId(id);
		this.setIdClient(idClient);
		this.setIdProduct(idProduct);
		this.setOrderNumber(orderNumber);
		this.setDate(date);
		this.setQuantity(quantity);
	}

	//getters & setters
	this.getId = function(){return this.id;}
	this.getIdClient = function(){return this.idClient;}
	this.getIdProduct = function(){return this.idProduct;}
	this.getOrderNumber = function(){return this.orderNumber;}
	this.getDate = function(){return this.date;}
	this.getQuantity = function(){return this.quantity;}

	this.setId = function (id) {this.id=id;}
	this.setIdClient = function (idClient) {this.idClient=idClient;}
	this.setIdProduct = function (idProduct) {this.idProduct=idProduct;}
	this.setOrderNumber = function (orderNumber) {this.orderNumber=orderNumber;}
	this.setDate = function (date) {this.date=date;}
	this.setQuantity = function (quantity) {this.quantity=quantity;}

	this.arrayToString = function (arrayOrderObj)
	{
		var orderString ="";
		$.each(arrayorderObj, function (index, order){
			orderString+="order number "+(index+1)+":"+order.toString()+"\n";
		});
		return orderString;
		
	}
	
	this.toString = function ()
	{
		var orderString ="id="+this.getId()+" idClient="+this.getIdClient()+" idProduct="+this.getIdProduct();
		orderString +=" orderNumber="+this.getOrderNumber()+" date="+this.getDate()+" quantity="+this.getQuantity();
		
		return orderString;		
	}

}