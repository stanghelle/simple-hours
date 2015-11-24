function GetUsers($scope, $http) {
    // this is where the JSON from api.php is consumed
    $http.get('http://api.simplehours.no/json_api.php').
        success(function(data) {
            // here the data from the api is assigned to a variable named users
            $scope.users = data;
        });
}