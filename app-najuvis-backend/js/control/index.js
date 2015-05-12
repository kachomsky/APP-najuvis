//Angular code
(function (){
	var najuvis = angular.module("najuvisLogManagement",["ng-currency"]);
	
	najuvis.controller("najuvisLogController", function ($scope){
		//Propierties
		this.user = new userObj();
		
		this.checkSession = function () 
		{
			var user = JSON.parse(sessionStorage.getItem("userConnected"));
			//alert(user);
			if(user!=null)
			{
				window.open("adminWindow.html","_self");
			}
		}
		
		this.login = function ()
		{/*3*/
			var outPutdata = new Array();
			
			this.user = angular.copy(this.user);
			
			$.ajax({
				  url: 'php/control/control.php',
				  type: 'POST',
				  async: false,
				  data: 'action=10000&JSONData='+JSON.stringify(this.user),
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
				this.user = new userObj();
				this.user.construct2(outPutdata[1][0].nick, outPutdata[1][0].password);
				
				//alert(Storage);
				
				if(!typeof(Storage))
				{
					alert("This browser does not accept local variables");
				}
				else
				{
					sessionStorage.setItem("userConnected", JSON.stringify(this.user));
					
					window.open("adminWindow.html","_self");
				}				
			}
			else
			{
				showErrors(outPutdata[1]);
			}
			
		}
	});
})();