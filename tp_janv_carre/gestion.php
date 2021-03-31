<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="js/script.js"></script>
    <title>Eco Recycl</title>
    <style>
      label {
          display: inline-block;
          width: 7rem;
          margin: 1rem;
      } 
      a {
        display: inline-block;
        margin-right: 2rem;
      }  
    </style>
    <script>
      function supprimer(id) {
        document.location.href = 'supprimer.php?id='+id;
      }  
      function editer(id) {
        document.location.href = 'editer.php?id='+id;
      }
    </script>
  </head>
  <body>
    <header>
	    <a href="index.php"><img src="img/logo.png"></a>
	    <nav>
        <a href="emplacement.html">A suivre</a>
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
    <h1>Gestion des articles</h1>
    <?php
      date_default_timezone_set('Europe/Paris'); // Heure de Paris
      try {
        $base = new PDO('mysql:host=localhost; dbname=projet', 'root', '');
        $retour = $base->query('SELECT * FROM articles ORDER BY date DESC');
        while ($data = $retour->fetch()) {
          $id=$data["id"];
          echo "<div><button onclick=\"supprimer($id);\">Supprimer</button> <button onclick='editer($id);'>Éditer</button> ".$data['titre']." (".date("d/m/Y H:i:s",$data["date"]).")</div>";
        }
        $base = null;
      }
      catch(exception $e) {
        die('Erreur '.$e->getMessage());
      }
    ?>
    </main>
    <footer>&copy; 2021 - Eco Recycl</footer>
  </body>
</html>