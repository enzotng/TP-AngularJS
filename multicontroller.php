<!DOCTYPE html>
<html lang="fr" ng-app="MultiController">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/images/png/angular.png">
    <title>AngularJS - Enzo Tang</title>
</head>

<body>

<?php include("header.php"); ?>

    <main>

        <h1>TP n°2 : MultiController</h1>
        <div class="calcul">
            <p>
                <label for="valA">Valeur de A : </label>
                <input type="number" id="valA" ng-model="valA">
            </p>
            <p>
                <label for="valB">Valeur de B : </label>
                <input type="number" id="valB" ng-model="valB">
            </p>

            <p>Résultat : {{result}}</p>

            <p ng-controller="Math1">
                <button ng-click="add(valA,valB)">Additionner</button> Result: {{ result }}
            </p>
            <p ng-controller="Math2">
                <button ng-click="multiple(valA,valB)">Multiplier</button> Result: {{ result }}
            </p>
        </div>

    </main>
    <footer></footer>
    <script src="./assets/js/script/angular.min.js"></script>
    <script src="./assets/controllers/multicontroller.js"></script>
    <script src="./assets/js/script/main.js"></script>

</body>

</html>