<html>
    <head>
        <title>Ma page de traitement</title>
    </head>
    <body>
        <?php

if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['message'])) {
    // on affiche nos résultats
    echo 'Votre nom est '.$_POST['nom'].' et votre email est '.$_POST['email'].'</br></br>';
    
    echo 'Votre message est '.$_POST['message'];
}
        ?>
    </body>
</html>