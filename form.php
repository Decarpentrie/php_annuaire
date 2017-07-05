<?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=php_annuaire;charset=utf8', 'root', 'toulouse');
    }catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
    }
?>
<?php
    if(isset($_POST['lastName'])){
        $lastName= $_POST['lastName'];
    }
    if (isset($_POST['firstName'])){
        $firstName= $_POST['firstName'];
    }
    if (isset($_POST['entreprise'])) {
        $entreprise=$_POST['entreprise'];
    }
    if (isset($_POST['birthdate'])) {
        $birthdate=$_POST['birthdate'];
    }
    if (isset($_POST['adress'])) {
        $adress=$_POST['adress'];
    }
    if (isset($_POST['phone'])) {
        $phone=$_POST['phone'];
    }
    if(isset($_POST['creatGroup'])){
        $creatGroup=$_POST['creatGroup'];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>annuaire</title>
    </head>
    <body>
        <form action="result.php" method="post">
            <label for="lastName">Nom</label>
            <input type="text" name="lastName" value="pierre" placeholder="pierre">
            <label for="firstName">Prénom</label>
            <input type="text" name="firstName" value="paul-jacque" placeholder="Paul-jacque">
            <label for="entreprise">Entreprise</label>
            <input type="text" name="entreprise" value="citationandco" placeholder="citationandco">
            <label for="birthdate">date d'anniversaire</label>
            <input type="text" name="birthdate" value="02/02/02" placeholder="02/02/02">
            <label for="adress">adresse</label>
            <input type="text" name="adress" value="20 rue du déluge" placeholder="20 rue du déluge">
            <label for="phone">n° tel</label>
            <input type="text" name="phone" value="02152625" placeholder="020200202">
            <label for="creatGroup">nom du groupe</label>
            <input type="text" name="creatGroup" value="groupe" placeholder="nom du groupe">
            <input type="submit" value="OK">
        </form>
    </body>
</html>
