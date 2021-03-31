<meta charset="utf-8">

<?php
  $id=$_POST["id"];
  $titre=$_POST["titre"];
  $now = time();
  $contenu=addslashes($_POST["article"]);
  $base = new PDO('mysql:host=localhost; dbname=projet', 'root', '');
  $base->exec("UPDATE articles SET date=".$now.", titre='".$titre."', contenu='".$contenu."' WHERE id=$id");
  $base=null;
?>
<script>
  document.location.href='gestion.php';
</script>  
