<?php
$bdd = new PDO('mysql:host=localhost;dbname=id20273475_mehdi;chareset=utf8;', 'id20273475_root', 'Mehdi120206')
if (isset($_POST['envoie'])){
    if (!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        
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