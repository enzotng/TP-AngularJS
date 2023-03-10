<!DOCTYPE html>
<html lang="fr" ng-app="NestedRepeatBinding">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/images/png/angular.png">
    <title>AngularJS - Enzo Tang</title>
</head>

<body ng-controller="MyControlller">

<?php include("header.php"); ?>

    <main>
        <h1>TP n°4 : NestedRepeat</h1>
        <div ng-repeat="order in orders">
            <p class="item">Id commande : {{order.id}} | Id Trans : {{order.transid}} | Client : {{order.customer}} | Date : {{order.created}}</p>
            <div ng-repeat="item in order.details">
                <p class="subitem">Produit : {{item.name}} | Quantité : {{item.quantity}} | Prix : {{item.price}}€<hr></p>
            </div>
        </div>
    </main>

    <footer>
        <p>Copyright 2023 Enzo Tang. All Rights Reserved.</p>
    </footer>

    <script src="./assets/js/script/angular.min.js"></script>
    <script src="./assets/controllers/nestedrepeat.js"></script>
    <script src="./assets/js/script/main.js"></script>

</body>

</html>