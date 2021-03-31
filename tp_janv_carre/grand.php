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
    <center>
    <?php
      $im=$_GET['im'];
      echo "<img src=$im>";
    ?>
    </center>
	</main>
	<footer>&copy; 2021 - Eco Recycl</footer>
</body>
</html>
