<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Base de donnée projet</title>
</head>

<body>
  <?php
  try {
    $base = new PDO('mysql:host=localhost', 'root', '');
  } catch (exception $e) {
    die("Erreur : " . $e->getMessage());
    
  }
  /*Création base de donnée projet*/
  $base->exec("CREATE DATABASE projet DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");
  $base = null;

  try {
    $base = new PDO('mysql:host=localhost; dbname=projet', 'root', '');
  } catch (exception $e) {
    die("Erreur : " . $e->getMessage());
  }
  /*Création table article avec champs*/
  $base->exec("CREATE TABLE article(
        id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id), 
        titre TEXT, 
        contenu TEXT, 
        datepubli timestamp)");
  $base = null;
  ?>
</body>

</html>