<!DOCTYPE html>
<html lang="fr" ng-app="LogService">

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

        <div class="logservice" ng-controller="LogController">
            <h1>TP n°5 : LogService</h1>
            <p>
                <label for="message">Message:</label>
                <input type="text" id="message" ng-model="message">
            </p>
            <p>
                <button ng-click="$log.log(message)">Log</button>
                <button ng-click="$log.warn(message)">Warn</button>
                <button ng-click="$log.info(message)">Info</button>
                <button ng-click="$log.debug(message)">Debug</button>
                <button ng-click="$log.error(message)">Error</button>
            </p>
        </div>

    </main>

    <footer>
        <p>Copyright 2023 Enzo Tang. All Rights Reserved.</p>
    </footer>
    
    <script src="./assets/js/script/angular.min.js"></script>
    <script src="./assets/controllers/logservice.js"></script>
    <script src="./assets/js/script/main.js"></script>

</body>

</html>