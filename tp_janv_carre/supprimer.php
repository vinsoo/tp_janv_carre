<meta charset="utf-8">

<?php
  $id=$_GET["id"];
  $base = new PDO('mysql:host=localhost; dbname=projet', 'root', '');
  $retour = $base->exec("DELETE FROM articles WHERE id=$id");
  $base = null;
?>
<script>
  document.location.href='gestion.php';
</script>  
