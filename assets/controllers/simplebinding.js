var myApp = angular.module("SimpleBinding", []);
myApp.controller("MyControlller", [
  "$scope",
  function ($scope) {
    $scope.customer = {};
  },
]);
