var myApp = angular.module("MyService", []);

myApp.service("AreaService", function () {
  this.square = function (a) {
    return a * a;
  };
  this.circle = function (r) {
    return 3.14 * r * r;
  };
});

myApp.controller("MyController", function ($scope, AreaService) {
  $scope.result = 0;

  $scope.calculateSquare = function (a) {
    $scope.result = AreaService.square(a);
  };

  $scope.calculateCircle = function (r) {
    $scope.result = AreaService.circle(r);
  };
});
