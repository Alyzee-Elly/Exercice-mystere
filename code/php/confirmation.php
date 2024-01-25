<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Confirmation de votre inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/confirmation.css">
</head>
<body>

<div class="p-3 text-info-emphasis bg-info-subtle border border-info-subtle rounded-3" id=body>
    <h2>Confirmation de votre Inscription</h2>

<<img src="../img/bravo.png" alt="bravo" width=30%>

<?php
//session start
//connexion bdd
//recupération de l'utilisateur actuel (qui vient de s'inscrire)
//fermeture php
?>

    <p>Votre inscription a été réussie! Merci <?php echo $first_name; ?>, pour votre inscription.</p>

    <p>Vous pouvez désormais vous connecter ou découvrir le mot mystère</p>
    <a href = ../php/login.php><button type="button" class="btn btn-info">Me connecter</button></a> <a href = ../php/mystery_word.php><button type="button" class="btn btn-light">Voir le mot mystère</button>
</div>
    
</body>
</html>