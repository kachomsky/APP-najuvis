function userObj(){
	//Attributes
	this.id;
	this.nick;
	this.password;
	this.state;

	//methods
	this.construct = function(id, nick, password,state){
		this.setId(id);
		this.setNick(nick);
		this.setPassword(password);
		this.setState(state);
	}
	
	this.construct2 = function(nick,password){
		this.setNick(nick);
		this.setPassword(password);
	}

	//getters & setters
	this.getId = function(){return this.id;}
	this.getNick = function(){return this.nick;}
	this.getPassword = function(){return this.password;}
	this.getState = function(){ return this.state;}

	this.setId = function (id) {this.id=id;}
	this.setNick = function (nick) {this.nick=nick;}
	this.setPassword = function (password) {this.password=password;}
	this.setState = function (state) { this.state = state; }

	this.arrayToString = function (arrayUserObj)
	{
		var userString ="";
		$.each(arrayuserObj, function (index, user){
			userString+="user number "+(index+1)+":"+user.toString()+"\n";
		});
		return userString;
		
	}
	
	this.toString = function ()
	{
		var userString ="id="+this.getId()+" nick="+this.getNick()+" password="+this.getPassword()+" state="+this.getState();
		
		return userString;		
	}

}