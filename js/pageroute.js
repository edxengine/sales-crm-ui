/*var routing = angular.module('routingApp', ['ngRoute']);
routing.config(function ($routeProvider){
	
	$routeProvider
	
	//Home pageX
	.when('/home',{
		templateUrl : 'home.php',
		controller :'routingCntr'
	})
	
	//About Page
	
	.when('/about',{
		
		templateUrl:'about.php',
		controller :'aboutCntr'
	})
	
	.when('/contact',{
		templateUrl:'contact.php',
		controller:'contactCntr'
	})
	
	//create controller
	routing.controller('routingCntr', function($scope){
		//Display Message
		
		$scope.homepagemsg = "This is home page";
	});
	
	routing.controller('aboutCntr', function($scope){
		//Display Message
		
		$scope.aboutpagemsg = "This is about page";
	})
	
	routing.controller('contactCntr', function($scope){
		//Display Message
		
		$scope.contactpagemsg = "This is contact page";
	});
});*/

var app  = angular.module('mainApp', ['ngRoute']);

app.config(function($routeProvider){
	
	$routeProvider
	.when('/',{
		templateUrl:'login.php'
	})
	.when('/dashboard',{
		templateUrl:'dashboard.html'
	})
	.otherwise({
		redirectTo:'/'
	});
});

app.controller('myCrtl', function($scope){
	$scope.submit = function(){
		var uname = $scope.username;
		var upass = $scope.password;
		if($scope.username =='admin' && $scope.password =='admin'){
			$location.path('/dashboard')
		}
	}
})