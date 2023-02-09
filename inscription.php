<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=id20273475_mehdi;chareset=utf8;', 'id20273475_root', '5z*CO?-kN3AM3RQB');
if (isset($_POST['envoie'])){
    if (!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo = htmlspecialchars($_POST["pseudo"]);
        $mdp = sha1($_POST['mdp']);
        $insertUser = $bdd->prepare('INSERT INTO users(pseudo, mdp)VALUES(?, ?)');
        $insertUser->execute(array($pseudo, $mdp));
        $recupUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND mdp = ?'),
        $recupUser->execute(array($pseudo, $mdp));
        if ($recupUser->rowCount() > 0 ){
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupUser->apc-fetch()['id'];
        }
    }else {
    echo"Veuillez compléter tout les champs...";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Système Inscription</title>
        <link rel="icon" type="image/x-icon" href="/img/logo.ico">
        <meta charset="utf-8">
        <body>
            <href src="https://mehdiweb.000webhostapp.com/connexion.php">Vous connectez</href>
            <form method="POST" action="" align="center"> 
                <input type="text" name="pseudo" autocomplete="off">
                <br>
                <input type="password" name="mdp" autocomplete="off">
                <br/><br/>
                <input type="submit" name="envoie">
            </form>
        </body>
    </head>
</html>