<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    $retour = mail('yonathgm@outlook.fr', "Envoi de l'ordonnance", $_POST['nom'], 'From: webmaster@monsite.fr');
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    ?>
</body>
</html>