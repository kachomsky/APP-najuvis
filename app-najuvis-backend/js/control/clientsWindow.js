//Angular code
(function (){
	var najuvis = angular.module("clientsManagement",["ng-currency"]);
	
	najuvis.controller("clientsController", function ($scope){
		//Propierties
		this.client = new clientObj();
		this.user = new userObj();
		this.clientsArray = new Array();
		
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
		
		this.getAllClients = function() 
		{
			var outPutdata = new Array();
			
			$.ajax({
				  url: 'php/control/control.php',
				  type: 'POST',
				  async: false,
				  data: 'action=10003',
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
				this.clientsArray = new Array();
				for(var i = 0; i < outPutdata[1].length; i++){
					this.client = new clientObj();
					this.client.construct(outPutdata[1][i].id, outPutdata[1][i].email, outPutdata[1][i].name, outPutdata[1][i].surname1, outPutdata[1][i].surname2, outPutdata[1][i].dni);
					this.clientsArray.push(this.client);
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