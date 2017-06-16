// JavaScript Document

app.controller('timeCtrl',function($scope){
								 
	$scope.products = ["5.00 - Exercise","6.00 - Reading","7.00 - Breakfast","8.00 - Driving","9.00 - Office"];
	$scope.addItem = function(){
    $scope.errortext = "";
	if(!$scope.addMe) {return;}
	if($scope.products.indexOf($scope.addMe) == -1){
    $scope.products.push($scope.addMe);
	}else{
	$scope.errortext = "The item is already in your time list.";
	  }
	}
	
	$scope.removeItem = function(x){
	$scope.errortext = "";
    $scope.products.splice(x, 1);
	}
	
	
	 }); 