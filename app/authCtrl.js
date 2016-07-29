app.controller('authCtrl', function($rootScope, $scope, $http) {
    $http.get("api/v1/sess.php")
    .then(function (response) {
		$scope.names = response.data.records;
	});
});