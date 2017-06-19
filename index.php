<!-- ## Exercice 1
Faire une page HTML permettant de donner à l'utilisateur :
- son User Agent ------------ $_SERVER['HTTP_USER_AGENT'] pour récupérer l'User-Agent.
- son adresse ip ------------- $_SERVER['REMOTE_ADDR']
- le nom du serveur ----------echo $_SERVER['SERVER_NAME']-->

<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>

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

    <a href="page2.php">page 2</a>



  <section>
  <pre> <?php echo $_SERVER['HTTP_USER_AGENT']; ?> </pre>
<br>
<pre> <?php echo $_SERVER['REMOTE_ADDR']; ?> </pre>
<br>
<pre> <?php echo $_SERVER['SERVER_NAME']; ?> </pre>

  </section>
  </header>
  <!-- ## Exercice 2
  Sur la page index, faire un liens vers une autre page.
  Passer d'une page à l'autre le contenu des variables **nom**, **prenom** et **age**
  grâce aux sessions. Ces variables auront été définies directement dans le code.
  Il faudra afficher le contenu de ces variables sur la deuxième page. -->
  <section>

<?php
// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['prenom'] = 'Julien';
$_SESSION['nom'] = 'Goscicki';
$_SESSION['age'] = 44;
 ?>
  </section>
</body>
</html>
