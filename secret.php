<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="">
</head>

<body>
    <?php

    if (isset($_POST['mdp']) AND $_POST['mdp'] ==  "kangourou") // On verifie que la variable mdp existe
    {

    // Si $mdp = kangourou on affche

    ?>
       
        <h1>Voici les codes d'accès :</h1>
        <p><strong>1234-ABCD-4567-EFGH-8901-IJKL-2345-MNOP</strong></p>   
       
    <?php

    }
    else // Si le mdp différent de kangourou on lance message d'erreur.
    {
        echo '<p>ERREUR, le mot de passe n\'est pac correcte!!!</p>';
    }

    ?>
</body>
</html>
