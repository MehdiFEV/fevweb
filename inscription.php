<?php 
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
                <input type="text" name="pseudo">
                <br>
                <input type="password" name="mdp">
                <br/><br/>
                <input type="submit" name="envoie">
            </form>
        </body>
    </head>
</html>