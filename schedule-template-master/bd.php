<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>base de données php</title>
</head>
<body>
    <?php
     /*Gestion d'exceptions*/
    try {
        $base = new PDO('mysql:host=localhost', 'root', '');
      } catch (exception $e) {
        die("Erreur : " . $e->getMessage());
        
      }
      /*Création base de données jeuxolympiques*/
  $base->exec("CREATE DATABASE jeuxolympiques DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");
  $base = null;

     /*Gestion d'exceptions*/
  try {
    $base = new PDO('mysql:host=localhost; dbname=jeuxolympiques', 'root', '');
  } catch (exception $e) {
    die("Erreur : " . $e->getMessage());
  }

    /*Création table article avec champs*/
    $base->exec("CREATE TABLE resa(
        id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id), 
        evenement TEXT,
        heure  datetime,
        place  int)");
    

   // Insertion valeurs affiliées aux champs
  
   $billets = "INSERT INTO `resa` (evenement,heure,place)
   VALUES ('Finale 100m masculin','2024-06-23 09:30:00', 39),
          ('Finale Judo lourds masculin','2024-06-23 13:30:00', 27),
          ('Finale Saut perche masculin','2024-06-22 09:30:00', 40),
          ('Finale Judo lourds féminin','2024-06-23 15:30:00', 32),
          ('Finale 100m féminin','2024-06-23 11:30:00', 37),
          ('Finale Saut longueur masculin','2024-06-23 13:30:00',12),
          ('Finale Judo moyens masculin','2024-06-23 17:00:00', 8),
          ('Finale Judo moyens féminin','2024-06-23 15:30:00', 17),
          ('Finale Saut longueur féminin','2024-06-23 11:30:00', 14),
          ('Finale Judo légers masculin','2024-06-21 13:30:00', 8)";
   
   echo $billets;
   $base->exec($billets);
   $base=null;
   
                                                                                    
    ?>
    
</body>
</html>