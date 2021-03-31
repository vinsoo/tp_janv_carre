<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script src="js/script.js"></script>
  <title>Eco Recycl</title>
</head>
<body>
  <header>
    <a href="index.php"><img src="img/logo.png"></a>
    <nav>
        <a href="emplacement.php">A suivre</a>
        <a href="apropos.php">A propos</a>
        <a href="contact.html">Contact</a>
    </nav>
    <article>
      <a href="index.php">Blog</a>
      <a href="saisie.php">Saisie</a>
      <a href="gestion.php">Gestion</a>
      <a href="galerie.php">Galerie</a>
    </article>
  </header>
  <main>
    <h1>Édition d'un article</h1>
    <?php
      $id=$_GET["id"];
      $base = new PDO('mysql:host=localhost; dbname=projet', 'root', '');
      $retour = $base->query("SELECT * FROM articles WHERE id='".$id."'");
      $data = $retour->fetch();
      $date = $data["date"];
      $titre = $data["titre"];      
      $contenu = $data["contenu"];
      echo '<form name="f" action="miseajour.php" method="post">';
      echo '<label>Titre de l\'article</label>';
      echo '<input type="text" name="titre" size="100" value="'.$titre.'"><br>';
      echo '<label>Article</label>';
      echo '<textarea cols="91" rows="15" name="article">'.$contenu.'</textarea><br>';
      echo '<input type="hidden" name="id" value="'.$id.'">';
      echo '<input type="submit" value="Enregistrer">';
      echo '</form>';
    ?>
  </main>
  <footer>&copy; 2021 - Eco Recycl</footer>
</body>
</html>