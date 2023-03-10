<!DOCTYPE html>
<html lang="fr" ng-app="SimpleBinding">

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

    <main class="main_binding" ng-controller="MyControlller">

        <div class="row">

        <div class="binding_gauche">

            <div>
                <label for="name">Name : </label>
                <input type="text" id="name" ng-model="customer.name" placeholder="Name...">
            </div>

            <div>
                <label for="email">Email : </label>
                <input type="email" id="email" ng-model="customer.email" placeholder="Email...">
            </div>

            <div>
                <label for="selectcountry">Country :</label>
                <select name="selectcountry" id="selectcountry" ng-model="customer.country">
                    <option value="" selected disabled hidden>Default</option>
                    <option value="AU">Australia</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                    <option value="NL">Netherlands</option>
                    <option value="CH">Switzerland</option>
                    <option value="GB">United Kingdom</option>
                    <option value="US">United States</option>
                </select>
            </div>

        </div>

            <div class="binding_droite">

                <div class="radio_binding">
                    <label>Preference color :</label>
                    <input type="radio" name="color" id="radio1" value="Red" ng-model="customer.color">
                    <label for="radio1">Red</label>
                    <input type="radio" name="color" id="radio2" value="Green" ng-model="customer.color">
                    <label for="radio2">Green</label>
                    <input type="radio" name="color" id="radio3" value="Blue" ng-model="customer.color">
                    <label for="radio3">Blue</label>
                </div>

                <div>
                    <label for="birthdate">Birth Date :</label>
                    <input type="date" name="birthdate" id="birthdate" ng-model="customer.birthdate">
                </div>

                <div>
                    <label for="level">Skill level :</label>
                    <input type="range" name="level" id="level" min="1" max="100" alt="Level 1-100"
                        ng-model="customer.skilllevel">
                </div>

            </div>

        </div>

        <div>
            <label for="agree"><input type="checkbox" id="agree" ng-model="customer.agree"> I agree to the terms & conditions</label>
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>

        <div class="result_binding">
            Value : {{ customer }}
        </div>

    </main>

    <footer>
        <p>Copyright 2023 Enzo Tang. All Rights Reserved.</p>
    </footer>

    <script src="./assets/js/script/angular.min.js"></script>
    <script src="./assets/controllers/simplebinding.js"></script>
    <script src="./assets/js/script/main.js"></script>

</body>

</html>