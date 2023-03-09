var myApp = angular.module("LogService", []);
myApp.controller("LogController", function ($scope, $log) {
  $scope.$log = $log;
  $scope.message = "AngularJS";
});
