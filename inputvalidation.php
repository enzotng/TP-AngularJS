<!DOCTYPE html>
<html lang="fr" ng-app="InputValidation">

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

    <main ng-controller="MyControlller">
        <h1>TP n°3 : InputValidation</h1>
        <form name="form" ng-submit="submitForm(form.$valid)" novalidate class="myform">
            <div>
                <p>
                    <label for="name">Votre nom :</label>
                    <input type="text" id="name" ng-model="name" required>
                </p>
                <p>
                    <label for="email">Votre adresse mail :</label>
                    <input type="email" id="email" ng-model="email" required>
                </p>
                <p>
                    <button type="submit" ng-disabled="form.$invalid">Envoyer</button>
                </p>
            </div>
        </form>
    </main>

    <footer>
        <p>Copyright 2023 Enzo Tang. All Rights Reserved.</p>
    </footer>

    <script src="./assets/js/script/angular.min.js"></script>
    <script src="./assets/controllers/inputvalidation.js"></script>
    <script src="./assets/js/script/main.js"></script>

</body>

</html>