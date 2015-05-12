//Angular code
(function (){
	var najuvis = angular.module("najuvisManagement",["ng-currency"]);
	
	najuvis.controller("najuvisController", function ($scope){
		//Propierties
		this.user = new userObj();
		
		this.checkSession = function () 
		{
			var user = JSON.parse(sessionStorage.getItem("userConnected"));
			//alert(user);
			if(user!=null)
			{
				this.user = new userObj();
				this.user.construct2(user.nick, user.password);
				$scope.password2=this.user.getPassword();
			}
			else
			{
				window.open("index.html","_self");
			}	
		}
		
		this.logOut = function () 
		{
			sessionStorage.removeItem("userConnected");
			//sessionStorage.clear();
			
			window.open("index.html","_self");
		}
	});
})();