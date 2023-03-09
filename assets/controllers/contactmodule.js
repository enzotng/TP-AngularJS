var myApp = angular.module("ContactModule", []);
myApp.controller("ContactController", ["$scope", function ($scope) {
    $scope.contact = {
        name: "Michael Ken",
        email: "ken@email.com",
        phone: "017993993837"
    };
    $scope.calculate = function (a, b) {
        return (a + b) * 3;
    }
}]);

window.onload = function() {
    function getContact() {
        var mydiv = document.getElementById("mydiv");
        var scope = angular.element(mydiv).scope();
        var contact = scope.contact;
        scope.$apply();
        alert("Read contact." + JSON.stringify(contact));
    } function calculate() {
        var mydiv = document.getElementById("mydiv");
        var scope = angular.element(mydiv).scope();
        var result = scope.calculate(2, 3);
        scope.$apply();
        alert("call AngularJS controller function. Result: " + result);
    }
};