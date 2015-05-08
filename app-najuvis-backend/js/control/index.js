//Angular code
(function (){
	var najuvis = angular.module('najuvisManagement',['ng-currency']);
	najuvis.controller('najuvisManagementController', function($scope){

		//scope properties
		$scope.pageToShow = 0;

		//Controller properties
		this.productsArray = new Array();
		this.controllerRows = 0; //variable to control the number of rows in recommended
		this.numberOfRowsArray = new Array();
		this.numberOfRows = 4;

		this.getProductsData = function(){
			var outPutData = new Array();
			//Call AJAX in order to get all the products
			$.ajax({
				  url: 'php/control/control.php',
				  type: 'POST',
				  async: false,
				  data: 'action=10000',
				  dataType: "json",
				  success: function (response) {
				  	console.log(response);
					  outPutData = response;
				  },
				  error: function (xhr, ajaxOptions, thrownError) {
						alert(xhr.status+"\n"+thrownError);
				  }	
			});

			if(outPutData[0]){
				for (var i = 0; i < outPutData[1].length; i++)
				{
					var product = new productObj();
					product.construct(outPutData[1][i].id,outPutData[1][i].type,outPutData[1][i].name,outPutData[1][i].price,outPutData[1][i].description,outPutData[1][i].image);
					this.productsArray.push(product);
				}
			}else{
				alert("Error");
			}
		}

		//function to control the number of rows in recommended view
		this.calculateRow = function(){
			for(var i=0; i<this.numberOfRows;i++){
				this.numberOfRowsArray.push(i);
			}
		}

	});


	/**************TEMPLATES**********************/
	//Template to show recommended products
	najuvis.directive("recommended", function (){
		return {
		  restrict: 'E',
		  templateUrl:"templates/recommended.html",
		  controller:function(){
		  },
		  controllerAs: 'recommended'
		};
	});

	//Template to show products
	najuvis.directive("products", function (){
		return {
		  restrict: 'E',
		  templateUrl:"templates/products.html",
		  controller:function(){
		  },
		  controllerAs: 'products'
		};
	});		

	//Template to show locals
	najuvis.directive("locals", function (){
		return {
		  restrict: 'E',
		  templateUrl:"templates/locals.html",
		  controller:function(){
		  },
		  controllerAs: 'locals'
		};
	});

	//Template to show products
	najuvis.directive("cakeDesigner", function (){
		return {
		  restrict: 'E',
		  templateUrl:"templates/cake-designer.html",
		  controller:function(){
		  },
		  controllerAs: 'cakeDesigner'
		};
	});				

})();