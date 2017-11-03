<?php
if (!empty($_POST)){
    if (!empty($_POST['mdp']) && $_POST['mdp']=="123456"){
        $accessible = true;
    }
    else{
        $accessible = false;
    }

}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TP</title>
</head>
<body>
    <?php if (isset($accessible) && $accessible) : ?>
        <h1>codes d'accès au serveur :</h1>
        <ul>
            <li>login1 : mdp1</li>
            <li>login2 : mdp2</li>
            <li>login3 : mdp3</li>
        </ul>
    <?php else : ?>
        <form class="" action="" method="post">
            <label>Mot de passe :</label>
            <input type="password" name="mdp"><br><br>

            <input type="submit" value="Valider">
        </form>
    <?php endif; ?>

</body>
</html>
