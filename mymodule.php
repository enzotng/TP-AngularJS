<!DOCTYPE html>
<html lang="fr" ng-app="myModule">

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
        <h1>TP n°2 : mymodule.html</h1>
        <div class="hello" ng-controller="sayHello">
            <label for="name">Votre prénom :</label>
            <input type="text" id="name" ng-model="name.text">
            <p>Bonjour {{name.text}}, comment vas-tu ?</p>
        </div>
    </main>

    <footer>
        <p>Copyright 2023 Enzo Tang. All Rights Reserved.</p>
    </footer>

    <script src="assets/js/script/angular.min.js"></script>
    <script src="assets/controllers/mymodule.js"></script>
    <script src="assets/js/script/main.js"></script>
</body>

</html>