<!DOCTYPE html>
<html lang="fr" ng-app="SimpleModule">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/images/png/angular.png">
    <title>AngularJS - Enzo Tang</title>
</head>

<body ng-controller="MyController">

<?php include("header.php"); ?>

    <main>

        <h1>{{title}}</h1>
        <div class="calcul">
            <p>
                <label for="valA">Valeur de A : </label>
                <input type="number" id="valA" ng-model="valA" placeholder="Rentrez une valeur...">
            </p>
            <p>
                <label for="valB">Valeur de B : </label>
                <input type="number" id="valB" ng-model="valB" placeholder="Rentrez une valeur...">
            </p>

            <p>Résultat : {{result}}</p>

            <p>
                <button ng-click="add(valA,valB)">Additionner</button>
                <button ng-click="multiple(valA,valB)">Multiplier</button>
            </p>
        </div>

    </main>

    <footer>
        <p>Copyright 2023 Enzo Tang. All Rights Reserved.</p>
    </footer>
    
    <script src="./assets/js/script/angular.min.js"></script>
    <script src="./assets/controllers/simplemodule.js"></script>
    <script src="./assets/js/script/main.js"></script>

</body>

</html>