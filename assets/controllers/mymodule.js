var myApp = angular.module("myModule", []);
myApp.controller("sayHello", ["$scope", function ($scope) {
    $scope.name = { text: "Your Name" };
}]);
