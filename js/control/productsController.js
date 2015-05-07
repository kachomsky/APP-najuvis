//Angular code
(function (){
	var products = angular.module('productsManagement',['ng-currency']);
	products.controller('productsManagementController', function($scope){
		//scope properties
		/*$scope.pageToShow = 0;

		//Controller properties
		this.productsArray = new Array();
		this.controllerRows = 0; //variable to control the number of rows in recommended
		this.numberOfRowsArray = new Array();
		this.numberOfRows = 2;

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
		}*/

	});


	/**************TEMPLATES**********************/		
	//Template to show header
	products.directive("headerTemplate", function (){
		return {
		  restrict: 'E',
		  templateUrl:"templates/header-template.html",
		  controller:function(){
		  },
		  controllerAs: 'headerTemplate'
		};
	});	
	//Template to show footer
	products.directive("footerTemplate", function (){
		return {
		  restrict: 'E',
		  templateUrl:"templates/footer-template.html",
		  controller:function(){
		  },
		  controllerAs: 'footerTemplate'
		};
	});	

})();