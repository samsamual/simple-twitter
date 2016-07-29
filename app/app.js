var app = angular.module('myApp', ['ngRoute', 'ngAnimate', 'toaster']);

app.config(['$routeProvider',
  function ($routeProvider) {
        $routeProvider
			.when('/stat', {
                title: 'Logout',
                templateUrl: 'partials/stat.html',
                controller: 'authCtrl'
            })
			.when('/user', {
                title: 'Logout',
                templateUrl: 'partials/user.html',
                controller: 'authCtrl'
            })
            .when('/discover', {
                title: 'Signup',
                templateUrl: 'partials/discover.html',
                controller: 'authCtrl'
            })
            .when('/dashboard', {
                title: 'Dashboard',
                templateUrl: 'partials/dashboard.html',
                controller: 'authCtrl'
            })
            .when('/coba', {
                title: 'Dashboard',
                templateUrl: 'coba.html',
                controller: 'authCtrl'
            })
            .when('/', {
                title: 'Login',
                templateUrl: 'partials/dashboard.html',
                controller: 'authCtrl',
                role: '0'
            })
            .otherwise({
                redirectTo: '/'
            });
  }])
    .run(function ($http, $window, $rootScope, $location, Data) {
        $rootScope.$on("$routeChangeStart", function (event, next, current) {
			$http.get("api/v1/sess.php")
			.then(function (response) {
				$scope.names = response.data.records;
				$rootScope.name = names.name;
				$rootScope.email = names.email;
			});
			$rootScope.authenticated = $rootScope.name != "";
            if (!$rootScope.authenticated) {
                $window.location.href = "index.php";
            }
        });
    });