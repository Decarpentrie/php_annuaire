<?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=php_annuaire;charset=utf8', 'root', 'toulouse');
    }catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
    }

    $reponse = $bdd->query('SELECT * FROM contact');
?>
<?php
    $lastName= $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $entreprise=$_POST['entreprise'];
    $birthdate=$_POST['birthdate'];
    $adress=$_POST['adress'];
    $phone=$_POST['phone'];

    $req = $bdd->prepare('INSERT INTO contact(lastName, firstName, entreprise, birthdate, adress, phone ) VALUES(:lastName, :firstName, :entreprise, :birthdate, :adress, :phone)');

    $req->execute(array(
        'lastName' => $lastName,
        'firstName' => $firstName,
        'entreprise'=>$entreprise,
        'birthdate'=>$birthdate,
        'adress'=>$adress,
        'phone'=>$phone,
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
                     echo "<p>nom: ".$donnees['lastName']. " prénom: ". $donnees['firstName']." entreprise: ". $donnees['entreprise']. " date d'aniversaire: ".$donnees['birthdate']. " adresse: ".$donnees['adress']. " telephone: ".$donnees['phone'];
                 }
         	?>
    </body>
</html>
