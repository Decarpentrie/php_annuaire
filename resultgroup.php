<?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=php_annuaire;charset=utf8', 'root', 'toulouse');
    }catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
    }

    $reponse = $bdd->query('SELECT * FROM groupe');
?>
<?php
$creatGroup=$_POST['creatGroup'];

$req=$bdd->prepare('INSERT INTO groupe(creatGroup) VALUES(:creatGroup)');

   $req->execute(array(
       'creatGroup'=>$creatGroup,
   ));
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
                     echo" groupe: ".$donnees['creatGroup'];
                 }
         	?>
    </body>
</html>
