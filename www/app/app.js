var app = angular.module('myApp', ['ngRoute', 'ngAnimate', 'toaster']);

app.config(['$routeProvider',
  function ($routeProvider) {
        $routeProvider.
        when('/login', {
            title: 'Login',
            templateUrl: 'partials/login.html',
            controller: 'authCtrl'
        })
            .when('/logout', {
                title: 'Logout',
                templateUrl: 'partials/login.html',
                controller: 'logoutCtrl'
            })
            .when('/signup', {
                title: 'Signup',
                templateUrl: 'partials/signup.html',
                controller: 'authCtrl'
            })
            .when('/dashboard', {
                title: 'Dashboard',
                templateUrl: 'partials/dashboard.html',
                controller: 'authCtrl'
            })
            .when('/timer', {
                title: 'Timer',
                templateUrl: 'partials/timer.html',
                controller: 'authCtrl'
            })
            .when('/endre_passord', {
                title: 'Endre passord',
                templateUrl: 'partials/endre_passord.html',
                controller: 'authCtrl'
            })
            .when('/mnd/01', {
                title: 'Januar',
                templateUrl: 'partials/mnd/01.html',
                controller: 'authCtrl'
            })
            .when('/09', {
                title: 'Mnd 2',
                templateUrl: 'partials/09.html',
                controller: 'authCtrl'
            })
            .when('/03', {
                title: 'mnd 3',
                templateUrl: 'partials/mnd/03.html',
                controller: 'authCtrl'
            })
           
            .when('/', {
                title: 'Login',
                templateUrl: 'partials/login.html',
                controller: 'authCtrl',
                role: '0'
            })
            
            .otherwise({
                redirectTo: '/login'
            });
  }])
    .run(function ($rootScope, $location, Data) {
        $rootScope.$on("$routeChangeStart", function (event, next, current) {
            $rootScope.authenticated = false;
            Data.get('session').then(function (results) {
                if (results.uid) {
                    $rootScope.authenticated = true;
                    $rootScope.uid = results.uid;
                    $rootScope.name = results.name;
                    $rootScope.email = results.email;
                    window.localStorage['uid'] = results.uid;
                } else {
                    var nextUrl = next.$$route.originalPath;
                    if (nextUrl == '/signup' || nextUrl == '/login') {

                    } else {
                        $location.path("/login");
                    }
                }
            });
        });
    });
 var appt = angular.module('timer', []);
appt.controller('customersCtrl', function($scope, $http) {
    $http.get("http://simplehours.no/api/json.php?uid=$rootScope.uid&mnd=09")
    .then(function (response) {$scope.names = response.data.records;});
});
