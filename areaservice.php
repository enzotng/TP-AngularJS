<!DOCTYPE html>
<html lang="fr" ng-app="MyService">

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

        <div class="areaservice" ng-controller="MyController">
            <h1>TP n°5 : AreaService</h1>
            <p>
                <label for="val">Input number :</label>
                <input type="number" id="val" ng-model='val'>
            </p>
            <p>Résultat : {{ result }}</p>
            <p>
                <button ng-click="calculateSquare(val)">Calculate Square</button>
                <button ng-click="calculateCircle(val)">Calculate Circle</button>
            </p>
        </div>

    </main>

    <footer>
        <p>Copyright 2023 Enzo Tang. All Rights Reserved.</p>
    </footer>

    <script src="./assets/js/script/angular.min.js"></script>
    <script src="./assets/controllers/angularservice.js"></script>
    <script src="./assets/js/script/main.js"></script>

</body>

</html>