<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// Vous devez faire un select pour afficher le mot mystere affiché en bdd ! =)
//Connexion
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mystery_word";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
   
// Vous devez faire un select pour afficher le mot mystere affiché en bdd ! =)
// Requête SQL pour récupérer le mot mystère
$sql = "SELECT world FROM mystery_world WHERE id_mystery_world = 1"; 

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $mystery_word = $row["world"];
    } else {
    $mystery_word = "Echec, essaie encore !.";
    }
    
    //Fermeture
    $conn->close();
?>
       
    

    <p> Je veux connaitre le mot mystere, donc affichez le ici : <?php echo $mystery_word;?></p>
    
</body>
</html>