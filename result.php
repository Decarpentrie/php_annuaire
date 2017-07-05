<?php
    require_once 'resultform.php';
    require_once 'resultgroup.php';
 ?>
<?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=php_annuaire;charset=utf8', 'root', 'toulouse');
    }catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
    }

    $reponse = $bdd->query('SELECT * FROM contact LEFT JOIN groupe ON contact.id=groupe.id');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
             <?php
                 while ($donnees=$reponse->fetch()) {
                     echo "<p>nom: ".$donnees['lastName']. " prénom: ". $donnees['firstName']." entreprise: ". $donnees['entreprise']. " date d'aniversaire: ".$donnees['birthdate']. " adresse: ".$donnees['adress']. " telephone: ".$donnees['phone']. " groupes: ".$donnees['creatGroup'];
                 }
         	?>
    </body>
</html>
