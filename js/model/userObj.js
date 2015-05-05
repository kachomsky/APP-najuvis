function userObj(){
	//Attributes
	this.id;
	this.nick;
	this.password;

	//methods
	this.construct = function(id, nick, password){
		this.setId(id);
		this.setNick(nick);
		this.setPassword(password);
	}

	//getters & setters
	this.getId = function(){return this.id;}
	this.getNick = function(){return this.nick;}
	this.getPassword = function(){return this.password;}

	this.setId = function (id) {this.id=id;}
	this.setNick = function (nick) {this.nick=nick;}
	this.setPassword = function (password) {this.password=password;}

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
		var userString ="id="+this.getId()+" nick="+this.getNick()+" password="+this.getPassword();
		
		return userString;		
	}

}