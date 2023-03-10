<!DOCTYPE html>
<html lang="fr" ng-app="SimpleFilter">

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

        <div ng-controller="MyControlller">
            <h1>TP n°4 : SimpleFilter</h1>
            <p>
                <label for="filter">Filter:</label>
                <input type="text" id="filter" ng-model="query">
            </p>
            <div ng-repeat="customer in customers | filter:query">
                <p class="item">{{customer.name}} | {{customer.email}} | {{customer.country}}<hr></p>
            </div>
        </div>

    </main>

    <footer>
        <p>Copyright 2023 Enzo Tang. All Rights Reserved.</p>
    </footer>

    <script src="./assets/js/script/angular.min.js"></script>
    <script src="./assets/controllers/simplefilter.js"></script>
    <script src="./assets/js/script/main.js"></script>

</body>

</html>