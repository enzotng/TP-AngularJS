<!DOCTYPE html>
<html lang="fr" ng-app="ContactModule">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Module Simple</title>
</head>

<body>

<?php include("header.php"); ?>
    
    <main>

        <p>Demo calling AngularJS controller function from External JavaScript</p>
        <div id="mydiv" ng-controller="ContactController">
            <button onclick="getContact()" >Get Contact</button>
            <button onclick="calculate()" >Calculate</button>
        </div>

    </main>
    <footer></footer>
    <script src="./assets/js/script/angular.min.js"></script>
    <script>
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
    </script>
    <script src="./assets/controllers/contactmodule.js"></script>
    <script src="./assets/js/script/main.js"></script>

</body>

</html>