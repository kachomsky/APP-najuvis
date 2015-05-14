//Angular code
(function (){
	var najuvis = angular.module("usersManagement",["ng-currency"]);
	
	najuvis.controller("usersController", function ($scope){
		//Propierties
		this.user = new userObj();
		this.usersArray = new Array();
		
		this.checkSession = function () 
		{
			var userConnected = JSON.parse(sessionStorage.getItem("userConnected"));
			//alert(user);
			if(userConnected!=null)
			{
				this.user = new userObj();
				this.user.construct2(userConnected.nick, userConnected.password);
				$scope.password2=this.user.getPassword();
			}
			else
			{
				window.open("index.html","_self");
			}	
		}
		
		this.getAllUsers = function() 
		{
			var outPutdata = new Array();
			
			$.ajax({
				  url: 'php/control/control.php',
				  type: 'POST',
				  async: false,
				  data: 'action=10001',
				  dataType: "json",
				  success: function (response) { 
					  outPutdata = response;
				  },
				  error: function (xhr, ajaxOptions, thrownError) {
						alert(xhr.status+"\n"+thrownError);
				  }	
			});
			
			if(outPutdata[0])
			{
				this.usersArray = new Array();
				for(var i = 0; i < outPutdata[1].length; i++){
					this.user = new userObj();
					this.user.construct(outPutdata[1][i].id, outPutdata[1][i].nick, outPutdata[1][i].password, outPutdata[1][i].state, outPutdata[1][i].type);
					this.usersArray.push(this.user);
				}				
			}
			else
			{
				showErrors(outPutdata[1]);
			}
		}
		
		this.deleteUser = function(userPos)
		{
			if(confirm("Seguro quiere eliminarlo?"))
			{
				var idUserToDelete = this.usersArray[userPos].id;
				
				$.ajax({
				  url: 'php/control/control.php',
				  type: 'POST',
				  async: false,
				  data: 'action=10002&JSONData='+idUserToDelete,
				  dataType: "json",
				  success: function (response) { 
					  //alert(reponse);
				  },
				  error: function (xhr, ajaxOptions, thrownError) {
					  //alert(xhr.status+"\n"+thrownError);
				  }	
				});
				
				this.getAllUsers();
				
			}else{
				alert("Usuario no eliminardo.");
			}
		}
		
	});
})();