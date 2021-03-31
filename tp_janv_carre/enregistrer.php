<meta charset="utf-8">
<?php
  $titre = htmlspecialchars($_POST["titre"]);
  $article = htmlspecialchars($_POST["article"]);
  try {
    $base = new PDO('mysql:host=localhost; dbname=projet', 'root', '');
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $now = time();
    $sql = "INSERT INTO articles (date, titre, contenu) VALUES ($now, \"$titre\", \"$article\")";
    $base->exec($sql);
    $base = null;
  }
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }
  header ('Location:saisie.php');
?>
  