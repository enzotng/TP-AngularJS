var myApp = angular.module("InputValidation", []);
myApp.controller("MyControlller", ["$scope", function ($scope) {
    $scope.submitForm = function (isValid) {
        if (isValid) {
            alert("Data was saved");
        }
        else{
            alert("Ca bug");
        }
    };
}]);
