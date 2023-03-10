var myApp = angular.module("SimpleFilter", []);
myApp.controller("MyControlller", ["$scope", function ($scope) {
    $scope.customers = [
        { name: "andi", email: "andi@email.com", country: "UK" },
        { name: "brown", email: "brown@email.com", country: "NL" },
        { name: "jake", email: "jake@email.com", country: "DE" },
        { name: "jane", email: "jane@email.com", country: "UK" },
        { name: "mike", email: "mike@email.com", country: "US" },
        { name: "zahra", email: "zahra@email.com", country: "CA" },
        { name: "tang", email: "enzotang@live.fr", country: "FR" }
    ]
}]);