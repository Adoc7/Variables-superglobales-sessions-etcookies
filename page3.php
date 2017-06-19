<!-- ## Exercice 4
Faire une page qui va récupérer les informations
du cookie créé à l'exercice 3 et qui les affiches. -->

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link href="./bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet">
  <link href="./bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="./bootstrap-3.3.7-dist/fonts" rel="text/css">
  <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great%7CSource+Sans+Pro" rel="stylesheet">
  <script src="jquery-3.2.1.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="style.css" />
  <title>superglobales</title>
</head>
<body>
  <header>
    <a href="index.php">index</a>
    <a href="page4.php">Redéfinir login et mot de passe</a>
<section>



    <p>

        <?php echo $_COOKIE['login']; ?>
        <?php echo $_COOKIE['mdp']; ?>
    </p>

    </section>
  </header>
</body>

</html>
