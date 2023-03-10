<!DOCTYPE html>
<html lang="fr" ng-app="">

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
        <p>Demo disable button. Checked Checkbox to enable button</p>
        <br>
        <p><input type="checkbox" ng-model="agree">I agree to the terms & conditions</p>
        <p>
            <button type="submit" ng-disabled="!agree">Submit</button>
        </p>

    </main>
    <footer></footer>
    <script src="./assets/js/script/angular.min.js"></script>
    <script src="./assets/controllers/contactmodule.js"></script>
    <script src="./assets/js/script/main.js"></script>

</body>

</html>