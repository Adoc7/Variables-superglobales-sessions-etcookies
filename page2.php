<?php
session_start();// On démarre la session AVANT tout
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

     <a href="index.php">index</a>



  <!-- ## Exercice 2
  Sur la page index, faire un liens vers une autre page.
  Passer d'une page à l'autre le contenu des variables **nom**, **prenom** et **age**
  grâce aux sessions. Ces variables auront été définies directement dans le code.
  Il faudra afficher le contenu de ces variables sur la deuxième page. -->

  <section>
      <p id="sess">Je me souviens de toi ! Tu t'appelles <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?> !<br />
     Et ton âge… Tu as <?php echo $_SESSION['age']; ?> ans, c'est ça ? :-D</p>
   </section>
   </header>

  <!-- ## Exercice 3
  Faire un formulaire qui permet de récupérer
  le login et le mot de passe de l'utilisateur.
  A la validation du formulaire,
  stocker les informations dans un cookie. -->
  <section>
      <div>
        <form method="post" action="script.php" enctype="multipart/form-data">
          <div>
            <fieldset>
            <h2>Login et mot de passe</h2>
            <p>Remplir le formulaire...</p>
            <label>Entrer votre</label>
            <input id="login" type="text" name="login" placeholder="login" value=""><br>
            <label>Entrer votre</label>
            <input id="mdp" type="password" name="mdp"  placeholder="mot de passe" value=""><br>
            <br>
            <input id="btn" type="submit" value="VALIDER"></input>
            </fieldset>
          </div>
        </form>
      </div>
    </section>
</body>
</html>
