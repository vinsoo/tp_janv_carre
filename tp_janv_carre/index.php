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
			<!-- barre de navigation haut-->
		<a href="emplacement.html">A suivre</a>
        <a href="apropos.php">A propos</a>
        <a href="contact.html">Contact</a>
			<!-- barre de navigation haut-->
		</nav>
		<article>
			<!-- barre de navigation header-->
		  <a href="index.php">Blog</a>
		  <a href="saisie.php">Saisie</a>
      	  <a href="gestion.php">Gestion</a>
		  <a href="galerie.php">Galerie</a>
		  <!-- barre de navigation header-->
		</article>
	</header>
	<main>
    <?php
      try {
        $base = new PDO('mysql:host=localhost; dbname=projet', 'root', '');
        $retour = $base->query('SELECT * FROM articles ORDER BY date DESC');
        while ($data = $retour->fetch()) {
          echo "<div class='clear'><br><article><div class='art'><h2><i class='fa fa-pagelines'></i> ".$data['titre']." (".date("d/m/Y H:i:s",$data["date"]).")</h2>";
          echo  htmlspecialchars_decode($data['contenu'], ENT_QUOTES)."<br><br></div></article>";
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
