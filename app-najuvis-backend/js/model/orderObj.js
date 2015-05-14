function orderObj(){
	//Attributes
	this.id;
	this.idClient;
	this.orderNumber;
	this.dateOrder;
	this.deliveryDate;
	this.totalPrice;

	//methods
	this.construct = function(id, idClient, orderNumber, dateOrder, deliveryDate, totalPrice){
		this.setId(id);
		this.setIdClient(idClient);
		this.setOrderNumber(orderNumber);
		this.setDateOrder(dateOrder);
		this.setDeliveryDate(deliveryDate);
		this.setTotalPrice(totalPrice);
	}

	//getters & setters
	this.getId = function(){return this.id;}
	this.getIdClient = function(){return this.idClient;}
	this.getOrderNumber = function(){return this.orderNumber;}
	this.getDateOrder = function(){return this.dateOrder;}
	this.getDeliveryDate = function(){return this.deliveryDate;}
	this.getTotalPrice = function(){return this.totalPrice;}

	this.setId = function (id) {this.id=id;}
	this.setIdClient = function (idClient) {this.idClient=idClient;}
	this.setOrderNumber = function (orderNumber) {this.orderNumber=orderNumber;}
	this.setDateOrder = function (dateOrder) {this.dateOrder=dateOrder;}
	this.setDeliveryDate = function (deliveryDate) {this.deliveryDate=deliveryDate;}
	this.setTotalPrice = function (totalPrice) {this.totalPrice=totalPrice;}

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
		var orderString ="id="+this.getId()+" idClient="+this.getIdClient();
		orderString +=" orderNumber="+this.getOrderNumber()+" dateOrder="+this.getDateOrder()+" deliveryDate="+this.getDeliveryDate()+" totalPrice="+this.getTotalPrice();
		
		return orderString;		
	}

}