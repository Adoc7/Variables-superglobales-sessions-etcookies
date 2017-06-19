<?php
setcookie('login', $_POST['login'], time() + 365*24*3600, null, null, false, true);
setcookie('mdp', $_POST['mdp'], time() + 365*24*3600, null, null, false, true);

header('Location: page3.php');
?>
