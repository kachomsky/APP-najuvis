//Angular code
(function (){
	var najuvis = angular.module('najuvisManagement',['ng-currency']);
	najuvis.controller('najuvisManagementController', function($scope){

		//Controller properties
		this.productsArray = new Array();

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
					//product.setId(outPutData[1][i].id);
					//alert(local);
					this.productsArray.push(product);
				}
			}else{
				alert("Error");
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

})();